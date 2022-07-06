<?php

namespace App\Models;

use CodeIgniter\Model;

class PendaftarModel extends Model
{
    protected $table = 'pendaftar';
    protected $allowedFields = 
    [
        'nama_seminar', 
        'nama_pendaftar', 
        'no_pendaftar', 
        'email_pendaftar', 
        'instansi_pendaftar', 
        'jurusan_pendaftar',
        'status_pendaftar'
    ];
}