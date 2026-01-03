<?php

namespace App\Controllers;

use App\Models\M_Fornesedor;

class Fornesedor extends BaseController
{
    protected $fornesedor;

    public function __construct()
    {
        $this->fornesedor = new M_Fornesedor();
    }

    // index
    public function index()
    {

        $data['fornesedor'] = $this->fornesedor->findAll();
        return view('fornesedor/index', $data);
    }

    // add
    public function add()
    {
        return view('fornesedor/add');
    }

    // Create

    public function create()
    {
        return view('fornesedor/add');
    }


    // store
    public function store()

    {
        $this->fornesedor->insertFornesedor([

            'id_fornesedor' => $this->request->getPost('id_fornesedor'),
            'naran_fornesedor' => $this->request->getPost('naran_fornesedor'),
            'telemovel' => $this->request->getPost('telemovel'),
            'email' => $this->request->getPost('email'),
            'enderesu' => $this->request->getPost('enderesu'),
            'estatutu' => $this->request->getPost('estatutu'),
        ]);

        return redirect()->to('fornesedor')->with('flash', 'Dadus hadia ho susesu!');
    }


    // edit
    public function edit($id)
    {
        $model = new M_Fornesedor();
        $data['fornesedor'] = $model->find($id);
        return view('fornesedor/update', $data);
    }

    // update
    public function update()
    {

        $model = new M_Fornesedor();

        $id = $this->request->getPost('id_fornesedor');

        $model->update($id, [

            'naran_fornesedor' => $this->request->getPost('naran_fornesedor'),
            'telemovel' => $this->request->getPost('telemovel'),
            'email' => $this->request->getPost('email'),
            'enderesu' => $this->request->getPost('enderesu'),
            'estatutu' => $this->request->getPost('estatutu'),

        ]);

        return redirect()->to('/fornesedor')->with('flash', 'Dadus hadia ho susesu!');
    }

    // delete
    public function delete($id)

    {
        $model = new M_Fornesedor();
        $model->delete($id);
        return redirect()->to('/fornesedor')->with('flash', 'Dadus hamoos ho susesu!');
    }


    // report print
    public function print()
    {
        $model = new \App\Models\M_Fornesedor();

        $builder = $model->builder('tbl_fornesedor');
        $builder->select('tbl_fornesedor.id_fornesedor,
         tbl_fornesedor.naran_fornesedor,
         tbl_fornesedor.telemovel,
         tbl_fornesedor.email,
         tbl_fornesedor.enderesu,
         tbl_fornesedor.estatutu
    ');

        $query = $builder->get();
        $data["fornesedor"] = $query->getResultArray();

        return view("fornesedor/print", $data);
    }
}
