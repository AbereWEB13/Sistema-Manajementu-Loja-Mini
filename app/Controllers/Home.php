<?php

namespace App\Controllers;

use App\Models\M_Produtu;

class Home extends BaseController
{
    public function index()
    {
        $model = new M_Produtu();

        // NAMA VARIABEL HARUS "produtu"
        $data['produtu'] = $model->findAll();

        return view('home', $data);
    }
}
