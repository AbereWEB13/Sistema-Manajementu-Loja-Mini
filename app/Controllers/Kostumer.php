<?php

namespace App\Controllers;

use App\Models\M_Kostumer;

class Kostumer extends BaseController
{
    protected $kostumer;

    public function __construct()
    {
        $this->kostumer = new M_Kostumer();
    }

    // index
    public function index()
    {

        $data['kostumer'] = $this->kostumer->findAll();
        return view('kostumer/index', $data);
    }

    // add
    public function add()
    {
        return view('kostumer/add');
    }

    // Create

    public function create()
    {
        return view('kostumer/add');
    }


    // store
    //Parte Store
    public function store()

    {
        $this->kostumer->insertkostumer([

            'id_kostumer' => $this->request->getPost('id_kostumer'),
            'naran_kostumer' => $this->request->getPost('naran_kostumer'),
            'email' => $this->request->getPost('email'),
            'telemovel' => $this->request->getPost('telemovel'),
            'enderesu' => $this->request->getPost('enderesu'),
        ]);

        return redirect()->to('kostumer')->with('flash', 'Dadus hadia ho susesu!');
    }


    // edit
    public function edit($id)
    {
        $model = new M_Kostumer();
        $data['kostumer'] = $model->find($id);
        return view('kostumer/update', $data);
    }

    // update
    public function update()
    {

        $model = new M_Kostumer();

        $id = $this->request->getPost('id_kostumer');

        $model->update($id, [

            'naran_kostumer' => $this->request->getPost('naran_kostumer'),
            'email' => $this->request->getPost('email'),
            'telemovel' => $this->request->getPost('telemovel'),
            'enderesu' => $this->request->getPost('enderesu'),

        ]);

        return redirect()->to('/kostumer')->with('flash', 'Dadus hadia ho susesu!');
    }

    // delete
    public function delete($id)

    {
        $model = new M_Kostumer();
        $model->delete($id);
        return redirect()->to('/kostumer')->with('flash', 'Dadus hamoos ho susesu!');
    }


    // report print
    public function print()
    {
        $model = new \App\Models\M_Kostumer();

        $builder = $model->builder('tbl_kostumer');
        $builder->select('tbl_kostumer.id_kostumer,
         tbl_kostumer.naran_kostumer,
         tbl_kostumer.email,
         tbl_kostumer.telemovel,
         tbl_kostumer.enderesu
 
    ');

        $query = $builder->get();
        $data["kostumer"] = $query->getResultArray();

        return view("kostumer/print", $data);
    }
}
