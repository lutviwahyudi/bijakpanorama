<?php

namespace App\Models;

use CodeIgniter\Model;

class MsgModel extends Model
{
    protected $table = 'tb_message';
    protected $primaryKey = 'id_message';
    protected $allowedFields = ['nama', 'email', 'subject', 'deskripsi'];

}
