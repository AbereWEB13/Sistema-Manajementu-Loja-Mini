<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Kostumer extends Model
{
    protected $table                = 'tbl_kostumer';
    protected $primaryKey           = 'id_kostumer';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = ['naran_kostumer', 'email', 'telemovel', 'enderesu'];

    public function getLastId()
    {
        return $this->selectMax('id_kostumer')->first()['id_kostumer'];
    }

    public function generateId()
    {
        $lastId = $this->getLastId();
        $newIdNumber = $lastId ? (int)substr($lastId, 2) + 1 : 1;
        return 'DE' . str_pad($newIdNumber, 3, '0', STR_PAD_LEFT);
    }

    public function insertKostumer($data)
    {
        return $this->db->table('tbl_kostumer')->insert($data);
    }
}
