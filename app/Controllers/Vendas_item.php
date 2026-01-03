<?php

namespace App\Controllers;

use App\Models\M_Vendas_item;
use App\Models\M_Produtu;
use App\Models\M_Vendas;

class vendas_item extends BaseController
{
    protected $vendas_item;

    public function __construct()
    {
        $this->vendas_item = new M_Vendas_item();
    }

    public function index()
    {
        $vendasitemModel = new \App\Models\M_Vendas_item();

        $data['vendas_item'] = $vendasitemModel
            ->select('
            tbl_vendas_item.id_vendas_item,tbl_vendas.kode_vendas,tbl_produtu.kode_produtu,tbl_produtu.naran_produtu,
            tbl_produtu.presu_vendas,tbl_vendas_item.kuantidade,tbl_vendas_item.subtotal')
            ->join('tbl_vendas', 'tbl_vendas.id_vendas = tbl_vendas_item.id_vendas')
            ->join('tbl_produtu', 'tbl_produtu.id_produtu = tbl_vendas_item.id_produtu')
            ->findAll();

        return view('vendas_item/index', $data);
    }


    // add
    public function add()
    {
        $model = new M_Vendas();
        $model2 = new M_Produtu();
        $data['vendas'] = $model->findAll();
        $data['produtu'] = $model2->findAll();
        return view('vendas_item/add', $data);
    }

    // create
    public function create()
    {
        $model = new M_Vendas();
        $model2 = new M_Produtu();
        $data['vendas'] = $model->findAll();
        $data['produtu'] = $model2->findAll();
        return view('vendas_item/add', $data);
    }


    // Store
    public function store()

    {
        $this->vendas_item->insertVendasitem([

            'id_vendas_item' => $this->request->getPost('id_vendas_item'),
            'id_vendas' => $this->request->getPost('id_vendas'),
            'id_produtu' => $this->request->getPost('id_produtu'),
            'kuantidade' => $this->request->getPost('kuantidade'),
            'presu_vendas' => $this->request->getPost('presu_vendas'),
            'subtotal' => $this->request->getPost('subtotal'),
        ]);

        return redirect()->to('vendas_item')->with('flash', 'Dadus hadia ho susesu!');
    }

    // edit
    public function edit($id)
    {
        $model = new M_Vendas_item();
        $model1 = new M_Vendas();
        $model2 = new M_Produtu();
        $data["vendas_item"] = $model->find($id);
        $data["vendas"] = $model1->findAll();
        $data["produtu"] = $model2->findAll();
        return view("vendas_item/update", $data);
    }

    // update
    //update
    public function update()
    {

        $model = new M_Vendas_item();

        $id = $this->request->getPost('id_vendas_item');

        $model->update($id, [



            'id_vendas_item'    => $this->request->getPost('id_vendas_item'),
            'id_kompras'    => $this->request->getPost('id_kompras'),
            'id_produtu' => $this->request->getPost('id_produtu'),
            'presu_modal'     => $this->request->getPost('presu_modal'),
            'kuantidade'    => $this->request->getPost('kuantidade'),
            'subtotal'           => $this->request->getPost('subtotal'),
        ]);

        return redirect()->to('/vendas_item')->with('flash', 'Dadus hadia ho susesu!');
    }

    // delete
    public function delete($id)
    {
        $model = new M_Vendas_item();

        $data = $model->select('vi.id_vendas_item,v.kode_vendas,p.kode_produtu,p.naran_produtu,
            p.presu_vendas,vi.kuantidade,vi.subtotal')
            ->from('tbl_vendas_item as vi')
            ->join('tbl_vendas as v', 'v.id_vendas = vi.id_vendas')
            ->join('tbl_produtu as p', 'p.id_produtu = tbl_vendas_item.id_produtu')
            ->where('vi.id_vendas_item', $id)
            ->first();
        if ($data) {
            // Delete the record
            $model->delete($id);
            return redirect()->to('/vendas_item')->with('flash', 'Dadus hamoos ho susesu!');
        }
    }

    // report print
    public function print()
    {
        $model = new \App\Models\M_Vendas_item();

        $builder = $model->builder('tbl_vendas_item');
        $builder->select('
        tbl_vendas_item.id_vendas_item,
        tbl_vendas.kode_vendas,
        tbl_produtu.kode_produtu,
        tbl_produtu.naran_produtu,
        tbl_produtu.presu_vendas,
        tbl_vendas_item.kuantidade,
        tbl_vendas_item.subtotal
    ');
        $builder->join('tbl_vendas', 'tbl_vendas.id_vendas = tbl_vendas_item.id_vendas');
        $builder->join('tbl_produtu', 'tbl_produtu.id_produtu = tbl_vendas_item.id_produtu');

        $query = $builder->get();
        $data["vendas_item"] = $query->getResultArray();

        return view("vendas_item/print", $data);
    }
}
