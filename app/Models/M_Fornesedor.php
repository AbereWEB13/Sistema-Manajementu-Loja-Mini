<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Fornesedor extends Model
{
    protected $table                = 'tbl_fornesedor';
    protected $primaryKey           = 'id_fornesedor';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = ['naran_fornesedor', 'telemovel', 'email', 'enderesu', 'estatutu'];

    public function getLastId()
    {
        return $this->selectMax('id_fornesedor')->first()['id_fornesedor'];
    }

    public function generateId()
    {
        $lastId = $this->getLastId();
        $newIdNumber = $lastId ? (int)substr($lastId, 2) + 1 : 1;
        return 'DE' . str_pad($newIdNumber, 3, '0', STR_PAD_LEFT);
    }

    public function insertFornesedor($data)
    {
        return $this->db->table('tbl_fornesedor')->insert($data);
    }
}
