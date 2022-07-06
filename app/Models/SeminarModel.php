<?php

namespace App\Models;

use CodeIgniter\Model;

class SeminarModel extends Model
{
    protected $table = 'contact';
    protected $allowedFields =
    [
        'name', 
        'subject', 
        'email', 
        'message'
    ];
}