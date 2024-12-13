<?php

namespace App\Models;

use CodeIgniter\Model;

class TamuModel extends Model
{
    protected $table = 'tb_tamu';
    protected $primaryKey = 'id_tamu';
    protected $allowedFields = ['nama', 'no_hp', 'waktu_mulai', 'waktu_berakhir', 'durasi', 'date'];

    public function getTamu($data)
    {
        return $this->insert($data);    
    }
}
