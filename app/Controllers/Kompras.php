<?php

namespace App\Controllers;

use App\Models\M_Fornesedor;
use App\Models\M_Kompras;

class kompras extends BaseController
{
    protected $kompras;

    public function __construct()
    {
        $this->kompras = new M_Kompras();
    }

    // index
    public function index()
    {
        $komprasModel = new \App\Models\M_Kompras();

        $data['kompras'] = $komprasModel

            ->select('tbl_kompras.id_kompras, tbl_kompras.kode_kompras,tbl_kompras.data_kompras,
            tbl_fornesedor.naran_fornesedor, tbl_kompras.total')
            ->join('tbl_fornesedor', 'tbl_fornesedor.id_fornesedor = tbl_kompras.id_fornesedor')
            ->findAll();
        return view('kompras/index', $data);
    }


    // add
    public function add()
    {
        $model = new M_Fornesedor();
        $data['fornesedor'] = $model->findAll();
        return view('kompras/add', $data);
    }

    //create
    public function create()
    {
        $model = new M_Fornesedor();
        $data['fornesedor'] = $model->findAll();
        return view('kompras/add', $data);
    }

    // store
    public function store()

    {
        $this->kompras->insertkompras([

            'id_kompras' => $this->request->getPost('id_kompras'),
            'kode_kompras' => $this->request->getPost('kode_kompras'),
            'data_kompras' => $this->request->getPost('data_kompras'),
            'id_fornesedor' => $this->request->getPost('id_fornesedor'),
            'total' => $this->request->getPost('total'),
        ]);

        return redirect()->to('kompras')->with('flash', 'Dadus hadia ho susesu!');
    }


    // edit
    public function edit($id)
    {
        $model = new M_Kompras();
        $model1 = new M_Fornesedor();
        $data['kompras'] = $model->find($id);
        $data['fornesedor'] = $model1->findall();
        return view('kompras/update', $data);
    }


    // update
    public function update()
    {

        $model = new M_Kompras();

        $id = $this->request->getPost('id_kompras');

        $model->update($id, [


            'id_kompras' => $this->request->getPost('id_kompras'),
            'kode_kompras' => $this->request->getPost('kode_kompras'),
            'data_kompras' => $this->request->getPost('data_kompras'),
            'id_fornesedor' => $this->request->getPost('id_fornesedor'),
            'total' => $this->request->getPost('total'),
        ]);

        return redirect()->to('/kompras')->with('flash', 'Dadus hadia ho susesu!');
    }

    // delete
    public function delete($id)
    {
        $model = new M_Kompras();

        $data = $model->select('ko.id_kompras, ko.kode_kompras, ko.data_kompras, fo.naran_fornesedor, ko.total')
            ->from('tbl_kompras as ko')
            ->join('tbl_fornesedor as fo', 'fo.id_fornesedor = ko.id_fornesedor')
            ->where('ko.id_kompras', $id)
            ->first();
        if ($data) {
            // Delete the record
            $model->delete($id);
            return redirect()->to('/kompras')->with('flash', 'Dadus hamoos ho susesu!');
        }
    }

    // report print
    public function print()
    {
        $model = new \App\Models\M_Kompras();

        $builder = $model->builder('tbl_kompras');
        $builder->select('tbl_kompras.id_kompras,
         tbl_kompras.kode_kompras,
         tbl_kompras.data_kompras,
         tbl_fornesedor.naran_fornesedor,
         tbl_kompras.total
    ');
        $builder->join('tbl_fornesedor', 'tbl_fornesedor.id_fornesedor = tbl_kompras.id_fornesedor');

        $query = $builder->get();
        $data["kompras"] = $query->getResultArray();

        return view("kompras/print", $data);
    }
}
