<?php

namespace App\Models;

use CodeIgniter\Model;

class TamuModel extends Model
{
    protected $table = 'tb_tamu';
    protected $primaryKey = 'id_tamu';
    protected $allowedFields = ['nama', 'nomor', 'date', 'deskripsi'];
}