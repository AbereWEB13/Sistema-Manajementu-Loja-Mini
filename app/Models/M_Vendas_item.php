<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Vendas_item extends Model
{
    protected $table                = 'tbl_vendas_item';
    protected $primaryKey           = 'id_vendas_item';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = [
        'id_vendas',
        'id_produtu',
        'kuantidade',
        'id_subkategoria',
        'presu_vendas',
        'subtotal'

    ];

    public function getLastId()
    {
        return $this->selectMax('id_vendas_item')->first()['id_vendas_item'];
    }

    public function generateId()
    {
        $lastId = $this->getLastId();
        $newIdNumber = $lastId ? (int)substr($lastId, 2) + 1 : 1;
        return 'PR' . str_pad($newIdNumber, 3, '0', STR_PAD_LEFT);
    }

    public function insertVendasitem($data)
    {
        return $this->db->table('tbl_vendas_item')->insert($data);
    }
}
