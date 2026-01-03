<?php

namespace App\Models;

use CodeIgniter\Model;

class M_Kompras extends Model
{
    protected $table                = 'tbl_kompras';
    protected $primaryKey           = 'id_kompras';
    protected $useAutoIncrement     = true;
    protected $allowedFields        = ['kode_kompras', 'data_kompras', 'id_fornesedor', 'total'];

    public function getLastId()
    {
        return $this->selectMax('id_kompras')->first()['id_kompras'];
    }

    public function generateId()
    {
        $lastId = $this->getLastId();
        $newIdNumber = $lastId ? (int)substr($lastId, 2) + 1 : 1;
        return 'DE' . str_pad($newIdNumber, 3, '0', STR_PAD_LEFT);
    }

    public function insertKompras($data)
    {
        return $this->db->table('tbl_kompras')->insert($data);
    }
}
