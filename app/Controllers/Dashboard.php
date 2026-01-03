<?php

namespace App\Controllers;

use App\Models\M_Produtu;
use App\Models\M_Kostumer;
use App\Models\M_Vendas_item;
use App\Models\M_Fornesedor;

class Dashboard extends BaseController
{
    public function index()
    {
        $produtu = new M_Produtu();
        $kostumer = new M_Kostumer();
        $vendas_item = new M_Vendas_item();
        $fornesedor = new M_Fornesedor();

        $data = [
            'total_produtu'   => $produtu->countAllResults(),
            'total_kostumer'     => $kostumer->countAllResults(),
            'total_vendas_item' => $vendas_item->countAllResults(),
            'total_fornesedor' => $fornesedor->countAllResults(),
        ];

        return view('dashboard', $data);
    }
}
