<?php

namespace App\Controllers;

use App\Models\M_Kategoria;

class Kategoria extends BaseController
{
    protected $kategoria;

    public function __construct()
    {
        $this->kategoria = new M_Kategoria();
    }


    // index
    public function index()
    {

        $data['kategoria'] = $this->kategoria->findAll();
        return view('kategoria/index', $data);
    }


    // add
    public function add()
    {
        return view('kategoria/add');
    }

    // create
    public function create()
    {
        return view('kategoria/add');
    }

    // store
    public function store()

    {
        $this->kategoria->insertkategoria([

            'id_kategoria' => $this->request->getPost('id_kategoria'),
            'naran_kategoria' => $this->request->getPost('naran_kategoria'),
        ]);

        return redirect()->to('kategoria')->with('flash', 'Dadus hadia ho susesu!');
    }

    // edit
    public function edit($id)
    {
        $model = new M_Kategoria();
        $data['kategoria'] = $model->find($id);
        return view('kategoria/update', $data);
    }

    // update
    // Parte Update
    public function update()
    {

        $model = new M_Kategoria();

        $id = $this->request->getPost('id_kategoria');

        $model->update($id, [

            'naran_kategoria' => $this->request->getPost('naran_kategoria')
        ]);

        return redirect()->to('/kategoria')->with('flash', 'Dadus hadia ho susesu!');
    }

    // delete

    public function delete($id)

    {
        $model = new M_Kategoria();
        $model->delete($id);
        return redirect()->to('/kategoria');
    }

    // parte report
    public function print()
    {
        $modelitem = new \App\Models\M_Kategoria();

        $builder = $modelitem->builder('tbl_kategoria');
        $builder->select('
        tbl_kategoria.id_kategoria,
        tbl_kategoria.naran_kategoria
    ');

        $query = $builder->get();
        $data["kategoria"] = $query->getResultArray();

        return view("kategoria/print", $data);
    }
}
