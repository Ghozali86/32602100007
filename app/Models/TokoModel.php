<?php

namespace App\Models;

use CodeIgniter\Model;

class TokoModel extends Model
{
    protected $table = 'barang';
    protected $primaryKey = "id";

    protected $allowedFields = [
        'id',
        'nama',
        'kategori',
        'harga',
        'stok'
    ];
}
