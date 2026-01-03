<?php

namespace App\Controllers;

use App\Models\M_Kompras_item;
use App\Models\M_Kompras;
use App\Models\M_Produtu;

class kompras_item extends BaseController
{
    protected $kompras_item;

    public function __construct()
    {
        $this->kompras_item = new M_Kompras_item();
    }

    public function index()
    {
        $modelitem = new \App\Models\M_Kompras_item();

        $data['kompras_item'] = $modelitem
            ->select('
            tbl_kompras_item.id_item,
            tbl_kompras.kode_kompras,
            tbl_produtu.naran_produtu,
            tbl_kompras_item.presu_modal,
            tbl_kompras_item.kuantidade,
            tbl_kompras_item.subtotal
        ')
            ->join('tbl_kompras', 'tbl_kompras.id_kompras = tbl_kompras_item.id_kompras')
            ->join('tbl_produtu', 'tbl_produtu.id_produtu = tbl_kompras_item.id_produtu')
            ->findAll();

        return view('kompras_item/index', $data);
    }


    // add
    public function add()
    {
        $model = new M_Kompras();
        $model2 = new M_Produtu();
        $data['kompras'] = $model->findAll();
        $data['produtu'] = $model2->findAll();
        return view('kompras_item/add', $data);
    }

    // create
    public function create()
    {
        $model = new M_Kompras();
        $model2 = new M_Produtu();
        $data['kompras'] = $model->findAll();
        $data['produtu'] = $model2->findAll();
        return view('kompras_item/add', $data);
    }

    // store
    public function store()

    {
        $this->kompras_item->insertkomprasitem([


            'id_item'    => $this->request->getPost('id_item'),
            'id_kompras'    => $this->request->getPost('id_kompras'),
            'id_produtu' => $this->request->getPost('id_produtu'),
            'presu_modal'     => $this->request->getPost('presu_modal'),
            'kuantidade'    => $this->request->getPost('kuantidade'),
            'subtotal'           => $this->request->getPost('subtotal'),
        ]);

        return redirect()->to('kompras_item')->with('flash', 'Dadus hadia ho susesu!');
    }

    // edit
    public function edit($id)
    {
        $model = new M_Kompras_item();
        $model1 = new M_Kompras();
        $model2 = new M_Produtu();
        $data["kompras_item"] = $model->find($id);
        $data["kompras"] = $model1->findAll();
        $data["produtu"] = $model2->findAll();
        return view("kompras_item/update", $data);
    }

    //update
    public function update()
    {

        $model = new M_Kompras_item();

        $id = $this->request->getPost('id_item');

        $model->update($id, [



            'id_item'    => $this->request->getPost('id_item'),
            'id_kompras'    => $this->request->getPost('id_kompras'),
            'id_produtu' => $this->request->getPost('id_produtu'),
            'presu_modal'     => $this->request->getPost('presu_modal'),
            'kuantidade'    => $this->request->getPost('kuantidade'),
            'subtotal'           => $this->request->getPost('subtotal'),
        ]);

        return redirect()->to('/kompras_item')->with('flash', 'Dadus hadia ho susesu!');
    }

    // delete
    public function delete($id)
    {
        $model = new M_Kompras_item();

        $data = $model->select(' ki.id_item,
            ko.kode_kompras,
            pr.naran_produtu,
            ki.presu_modal,
            ki.kuantidade,
            ki.subtotal')
            ->from('tbl_kompras_item as ki')
            ->join('tbl_kompras as ko', 'ko.id_kompras = ki.id_kompras')
            ->join('tbl_produtu as pr', 'pr.id_produtu = ki.id_produtu')
            ->where('ki.id_item', $id)
            ->first();
        if ($data) {
            // Delete the record
            $model->delete($id);
            return redirect()->to('/kompras_item')->with('flash', 'Dadus hamoos ho susesu!');
        }
    }

    // parte report
    public function print()
    {
        $modelitem = new \App\Models\M_Kompras_item();

        $builder = $modelitem->builder('tbl_kompras_item');
        $builder->select('
        tbl_kompras_item.id_item,
        tbl_kompras.kode_kompras,
        tbl_produtu.naran_produtu,
        tbl_kompras_item.presu_modal,
        tbl_kompras_item.kuantidade,
        (tbl_kompras_item.presu_modal * tbl_kompras_item.kuantidade) as subtotal
    ');
        $builder->join('tbl_kompras', 'tbl_kompras.id_kompras = tbl_kompras_item.id_kompras');
        $builder->join('tbl_produtu', 'tbl_produtu.id_produtu = tbl_kompras_item.id_produtu');

        $query = $builder->get();
        $data["kompras_item"] = $query->getResultArray();

        return view("kompras_item/print", $data);
    }
}
