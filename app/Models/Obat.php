<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    protected $table = 'obat';
    protected $fillable = [
        'no_obat',
        'nama_obat',
        'deskripsi_obat',
        'indikasi umum',
        'komposisi',
        'dosis',
        'aturan_pakai',    
    ];
}
