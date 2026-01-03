<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Subkategoria extends Model
{
    protected $table                = 'tbl_subkategoria';
    protected $primaryKey           = 'id_subkategoria';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = ['id_kategoria', 'naran_subkategoria', 'deskrisaun'];

    public function getLastId()
    {
        return $this->selectMax('id_subkategoria')->first()['id_subkategoria'];
    }

    public function generateId()
    {
        $lastId = $this->getLastId();
        $newIdNumber = $lastId ? (int)substr($lastId, 2) + 1 : 1;
        return 'DE' . str_pad($newIdNumber, 3, '0', STR_PAD_LEFT);
    }

    public function insertSubkategoria($data)
    {
        return $this->db->table('tbl_subkategoria')->insert($data);
    }
}
