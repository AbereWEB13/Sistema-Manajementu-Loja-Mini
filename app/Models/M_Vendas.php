<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Vendas extends Model
{
    protected $table                = 'tbl_vendas';
    protected $primaryKey           = 'id_vendas';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = ['kode_vendas', 'id_kostumer', 'data_vendas', 'total', 'metodu_pagu', 'estatutu'];

    public function getLastId()
    {
        return $this->selectMax('id_vendas')->first()['id_vendas'];
    }

    public function generateId()
    {
        $lastId = $this->getLastId();
        $newIdNumber = $lastId ? (int)substr($lastId, 2) + 1 : 1;
        return 'VE' . str_pad($newIdNumber, 3, '0', STR_PAD_LEFT);
    }

    public function insertVendas($data)
    {
        return $this->db->table('tbl_vendas')->insert($data);
    }
}
