<?php

namespace App\Models;

use CodeIgniter\Model;

class KamarModel extends Model
{
    protected $table = 'tb_kamar';
    protected $primaryKey = 'id';
    protected $allowedFields = ['j_kamar', 'harga',];

    public function getKamarById($id_kamar)
    {
        return $this->where(['id_kamar' => $id_kamar])->first();
    }
}

