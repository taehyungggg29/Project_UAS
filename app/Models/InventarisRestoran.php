<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventarisRestoran extends Model
{
    use HasFactory;

    protected $table = "InventarisRestoran";

    protected $fillable = [
        'nama',
        'kode',
        'jumlah_barang'
    ];
}
