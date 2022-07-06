<?php

namespace App\Models;

use CodeIgniter\Model;

class CardModel extends Model
{
    protected $table = 'card';
    protected $allowedFields = 
    [
        'nama', 
        'periode', 
        'narasumber', 
        'mc', 
        'kontak', 
        'deskripsi',
        'kuota','mulai', 
        'selesai', 
        'file', 
        'gambar'
    ];
}