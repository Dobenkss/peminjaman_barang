<?php

namespace App\Models;

use CodeIgniter\Model;

class PeminjamanModel extends Model
{
    protected $table = 'peminjaman';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'user_id',
        'barang_id',
        'nama',
        'nim',
        'no_telepon',
        'tanggal_mulai',
        'tanggal_selesai',
        'tujuan',
        'status'
    ];
}
