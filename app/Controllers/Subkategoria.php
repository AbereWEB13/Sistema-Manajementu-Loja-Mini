<?php

namespace App\Controllers;

use App\Models\M_Kategoria;
use App\Models\M_Subkategoria;

class Subkategoria extends BaseController
{
    protected $subkategoria;

    public function __construct()
    {
        $this->subkategoria = new M_Subkategoria();
    }

    // index
    public function index()
    {
        $subkategoriaModel = new \App\Models\M_Subkategoria();

        $data['subkategoria'] = $subkategoriaModel

            ->select('tbl_subkategoria.id_subkategoria, tbl_kategoria.naran_kategoria,
            tbl_subkategoria.naran_subkategoria,
             tbl_subkategoria.deskrisaun')
            ->join('tbl_kategoria', 'tbl_kategoria.id_kategoria = tbl_subkategoria.id_kategoria')
            ->findAll();
        return view('subkategoria/index', $data);
    }


    // add
    public function add()
    {
        $model = new M_Kategoria();
        $data['kategoria'] = $model->findAll();
        return view('subkategoria/add', $data);
    }

    //create
    public function create()
    {
        $model = new M_Kategoria();
        $data['kategoria'] = $model->findAll();
        return view('subkategoria/add', $data);
    }

    // store
    public function store()

    {
        $this->subkategoria->insertsubkategoria([

            'id_subkategoria' => $this->request->getPost('id_subkategoria'),
            'id_kategoria' => $this->request->getPost('id_kategoria'),
            'naran_subkategoria' => $this->request->getPost('naran_subkategoria'),
            'deskrisaun' => $this->request->getPost('deskrisaun'),
        ]);

        return redirect()->to('subkategoria')->with('flash', 'Dadus hadia ho susesu!');
    }


    // edit
    public function edit($id)
    {
        $model = new M_Subkategoria();
        $model1 = new M_kategoria();
        $data['subkategoria'] = $model->find($id);
        $data['kategoria'] = $model1->findall();
        return view('subkategoria/update', $data);
    }


    // update
    public function update()
    {

        $model = new M_Subkategoria();

        $id = $this->request->getPost('id_subkategoria');

        $model->update($id, [

            'id_subkategoria' => $this->request->getPost('id_subkategoria'),
            'id_kategoria' => $this->request->getPost('id_kategoria'),
            'naran_subkategoria' => $this->request->getPost('naran_subkategoria'),
            'deskrisaun' => $this->request->getPost('deskrisaun'),

        ]);

        return redirect()->to('/subkategoria')->with('flash', 'Dadus hadia ho susesu!');
    }

    // delete
    public function delete($id)
    {
        $model = new M_Subkategoria();

        $data = $model->select('sub.id_subkategoria,ka.naran_kategoria,sub.naran_subkategoria, sub.deskrisaun')
            ->from('tbl_subkategoria as sub')
            ->join('tbl_kategoria as ka', 'ka.id_kategoria = sub.id_kategoria')
            ->where('sub.id_subkategoria', $id)
            ->first();
        if ($data) {
            // Delete the record
            $model->delete($id);
            return redirect()->to('/subkategoria')->with('flash', 'Dadus hamoos ho susesu!');
        }
    }

    // report print
    public function print()
    {
        $model = new \App\Models\M_Subkategoria();

        $builder = $model->builder('tbl_subkategoria');
        $builder->select('tbl_subkategoria.id_subkategoria,
        tbl_kategoria.naran_kategoria,
        tbl_subkategoria.naran_subkategoria,
        tbl_subkategoria.deskrisaun
        ');

        $builder->join('tbl_kategoria', 'tbl_kategoria.id_kategoria = tbl_subkategoria.id_kategoria');
        $query = $builder->get();
        $data["subkategoria"] = $query->getResultArray();

        return view("subkategoria/print", $data);
    }
}
