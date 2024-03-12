<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilita extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_fasilitas',
        'alamat',
        'kondisi',
        'kapasitas',
        'pj_fasilitas',
        'no_telepon',
    ];
}
