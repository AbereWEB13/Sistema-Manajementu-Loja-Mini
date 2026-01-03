<?php

namespace App\Controllers;

use App\Models\M_Vendas;
use App\Models\M_Kostumer;

class Vendas extends BaseController
{
    protected $vendas;

    public function __construct()
    {
        $this->vendas = new M_Vendas();
    }

    // index
    public function index()
    {
        $vendasModel = new \App\Models\M_Vendas();

        $data['vendas'] = $vendasModel

            ->select('tbl_vendas.id_vendas,tbl_vendas.kode_vendas, tbl_kostumer.naran_kostumer, tbl_vendas.data_vendas, 
            tbl_vendas.total, tbl_vendas.metodu_pagu, tbl_vendas.estatutu')
            ->join('tbl_kostumer', 'tbl_kostumer.id_kostumer = tbl_vendas.id_kostumer')
            ->findAll();
        return view('vendas/index', $data);
    }


    // add
    public function add()
    {
        $model = new M_Kostumer();
        $data['kostumer'] = $model->findAll();
        return view('vendas/add', $data);
    }

    //create
    public function create()
    {
        $model = new M_Kostumer();
        $data['kostumer'] = $model->findAll();
        return view('vendas/add', $data);
    }

    // store
    public function store()

    {
        $this->vendas->insertVendas([

            'id_vendas' => $this->request->getPost('id_vendas'),
            'kode_vendas' => $this->request->getPost('kode_vendas'),
            'id_kostumer' => $this->request->getPost('id_kostumer'),
            'data_vendas' => $this->request->getPost('data_vendas'),
            'total' => $this->request->getPost('total'),
            'metodu_pagu' => $this->request->getPost('metodu_pagu'),
            'estatutu' => $this->request->getPost('estatutu'),
        ]);

        return redirect()->to('vendas')->with('flash', 'Dadus hadia ho susesu!');
    }


    // edit
    public function edit($id)
    {
        $model = new M_Vendas();
        $model1 = new M_Kostumer();
        $data['vendas'] = $model->find($id);
        $data['kostumer'] = $model1->findall();
        return view('vendas/update', $data);
    }


    // update
    public function update()
    {

        $model = new M_Vendas();

        $id = $this->request->getPost('id_vendas');

        $model->update($id, [

            'id_vendas' => $this->request->getPost('id_vendas'),
            'kode_vendas' => $this->request->getPost('kode_vendas'),
            'id_kostumer' => $this->request->getPost('id_kostumer'),
            'data_vendas' => $this->request->getPost('data_vendas'),
            'total' => $this->request->getPost('total'),
            'metodu_pagu' => $this->request->getPost('metodu_pagu'),
            'estatutu' => $this->request->getPost('estatutu'),

        ]);

        return redirect()->to('/vendas')->with('flash', 'Dadus hadia ho susesu!');
    }

    // delete
    public function delete($id)
    {
        $model = new M_Vendas();

        $data = $model->select('ve.id_vendas,ve.kode_vendas, ko.naran_kostumer, ve.data_vendas, 
            ve.total, ve.metodu_pagu, ve.estatutu')
            ->from('tbl_vendas as ve')
            ->join('tbl_kostumer as ko', 'ko.id_kostumer = ve.id_kostumer')
            ->where('ve.id_vendas', $id)
            ->first();
        if ($data) {
            // Delete the record
            $model->delete($id);
            return redirect()->to('/vendas')->with('flash', 'Dadus hamoos ho susesu!');
        }
    }

    // report print
    public function print()
    {
        $model = new \App\Models\M_Vendas();

        $builder = $model->builder('tbl_vendas');
        $builder->select('tbl_vendas.id_vendas,
        tbl_vendas.kode_vendas,
        tbl_kostumer.naran_kostumer, 
        tbl_vendas.data_vendas,
        tbl_vendas.total,
        tbl_vendas.metodu_pagu,
        tbl_vendas.estatutu
    ');
        $builder->join('tbl_kostumer', 'tbl_kostumer.id_kostumer = tbl_vendas.id_kostumer');

        $query = $builder->get();
        $data["vendas"] = $query->getResultArray();

        return view("vendas/print", $data);
    }
}
