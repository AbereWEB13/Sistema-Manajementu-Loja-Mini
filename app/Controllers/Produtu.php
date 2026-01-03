<?php

namespace App\Controllers;

use App\Models\M_Kategoria;
use App\Models\M_Produtu;
use App\Models\M_Subkategoria;

class Produtu extends BaseController
{
    protected $produtu;

    public function __construct()
    {
        $this->produtu = new M_Produtu();
    }

    public function index()
    {
        $produtuModel = new \App\Models\M_Produtu();

        $data['produtu'] = $produtuModel
            ->select('tbl_produtu.id_produtu,tbl_produtu.kode_produtu, tbl_produtu.naran_produtu, 
            tbl_kategoria.naran_kategoria,tbl_subkategoria.naran_subkategoria,tbl_produtu.presu_modal,
            tbl_produtu.presu_vendas,tbl_produtu.stok, tbl_produtu.image')
            ->join('tbl_kategoria', 'tbl_kategoria.id_kategoria = tbl_produtu.id_kategoria')
            ->join('tbl_subkategoria', 'tbl_subkategoria.id_subkategoria = tbl_produtu.id_subkategoria')
            ->findAll();

        return view('produtu/index', $data);
    }

    // add
    public function add()
    {
        $model = new M_Kategoria();
        $model2 = new M_Subkategoria();
        $data['kategoria'] = $model->findAll();
        $data['subkategoria'] = $model2->findAll();
        return view('produtu/add', $data);
    }

    // create
    public function create()
    {
        $model = new M_Kategoria();
        $model2 = new M_Subkategoria();
        $data['kategoria'] = $model->findAll();
        $data['subkategoria'] = $model2->findAll();
        return view('produtu/add', $data);
    }


    // Parte Store
    public function store()
    {


        $file = $this->request->getFile('image');

        if ($file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName(); // Kria naran random
            $file->move('uploads', $newName); // Rai iha pasta uploads
        } else {
            $newName = null; // Se la upload imajen
        } {

            $this->produtu->insertProdutu([

                'kode_produtu'    => $this->request->getPost('kode_produtu'),
                'naran_produtu'   => $this->request->getPost('naran_produtu'),
                'id_kategoria'    => $this->request->getPost('id_kategoria'),
                'id_subkategoria' => $this->request->getPost('id_subkategoria'),
                'presu_modal'     => $this->request->getPost('presu_modal'),
                'presu_vendas'    => $this->request->getPost('presu_vendas'),
                'stok'           => $this->request->getPost('stok'),
                'image'           => $newName,
            ]);

            return redirect()->to('produtu')->with('flash', 'Dadus Aumenta ho susesu!');
        }
    }

    // edit
    public function edit($id)
    {
        $model = new M_Produtu();
        $model1 = new M_Kategoria();
        $model2 = new M_Subkategoria();
        $data["produtu"] = $model->find($id);
        $data["kategoria"] = $model1->findAll();
        $data["subkategoria"] = $model2->findAll();
        return view("produtu/update", $data);
    }

    // update
    public function update()
    {

        $id = $this->request->getPost('id_produtu');
        $file = $this->request->getFile('image');
        $oldImage = $this->request->getPost('old_image');
        $imageName = $oldImage;

        if ($file->isValid() && !$file->hasMoved()) {

            $imageName = $file->getRandomName();
            $file->move('uploads', $imageName);
            if ($oldImage && file_exists('uploads/' . $oldImage)) {
                unlink('uploads/' . $oldImage);
            }
        }

        $this->produtu->update($id, [
            'kode_produtu'    => $this->request->getPost('kode_produtu'),
            'naran_produtu'   => $this->request->getPost('naran_produtu'),
            'id_kategoria'    => $this->request->getPost('id_kategoria'),
            'id_subkategoria' => $this->request->getPost('id_subkategoria'),
            'presu_modal'     => $this->request->getPost('presu_modal'),
            'presu_vendas'    => $this->request->getPost('presu_vendas'),
            'stok'           => $this->request->getPost('stok'),
            'image' => $imageName
        ]);

        return redirect()->to('/produtu ')->with('flash', 'Dadus hadia ho susesu!');
    }

    // delete
    public function delete($id)
    {
        $model = new M_Produtu();

        $data = $model->select('p.id_produtu,p.kode_produtu, p.naran_produtu, 
            ka.naran_kategoria,sub.naran_subkategoria,p.presu_modal,p.presu_vendas,p.stok, p.image')
            ->from('tbl_produtu as p')
            ->join('tbl_kategoria as ka', 'ka.id_kategoria = p.id_kategoria')
            ->join('tbl_subkategoria as sub', 'sub.id_subkategoria = p.id_subkategoria')
            ->where('p.id_produtu', $id)
            ->first();
        if ($data) {
            // Delete the record
            $model->delete($id);
            return redirect()->to('/produtu')->with('flash', 'Dadus hamoos ho susesu!');
        }
    }

    // report print
    public function print()
    {
        $model = new \App\Models\M_Produtu();

        $builder = $model->builder('tbl_produtu');
        $builder->select(
            'tbl_produtu.id_produtu,
        tbl_produtu.kode_produtu,
        tbl_produtu.naran_produtu, 
        tbl_kategoria.naran_kategoria,
        tbl_subkategoria.naran_subkategoria,
        tbl_produtu.presu_modal,
        tbl_produtu.presu_vendas,
        tbl_produtu.stok, 
        tbl_produtu.image'
        );
        $builder->join('tbl_kategoria', 'tbl_kategoria.id_kategoria = tbl_produtu.id_kategoria');
        $builder->join('tbl_subkategoria', 'tbl_subkategoria.id_subkategoria = tbl_produtu.id_subkategoria');

        $query = $builder->get();
        $data["produtu"] = $query->getResultArray();

        return view("produtu/print", $data);
    }
}
