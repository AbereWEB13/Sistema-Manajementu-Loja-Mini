<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Kompras_item extends Model
{
    protected $table                = 'tbl_kompras_item';
    protected $primaryKey           = 'id_item';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = [
        'id_kompras',
        'id_produtu',
        'presu_modal',
        'kuantidade',
        'subtotal'
    ];

    public function getLastId()
    {
        return $this->selectMax('id_item')->first()['id_item'];
    }

    public function generateId()
    {
        $lastId = $this->getLastId();
        $newIdNumber = $lastId ? (int)substr($lastId, 2) + 1 : 1;
        return 'KOI' . str_pad($newIdNumber, 3, '0', STR_PAD_LEFT);
    }

    public function insertkomprasitem($data)
    {
        return $this->db->table('tbl_kompras_item')->insert($data);
    }
}
