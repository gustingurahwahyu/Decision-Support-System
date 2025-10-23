<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    use HasFactory;


    protected $table = 'responses';


    protected $fillable = [
        'nama_pengguna',
        'preferensi_wisata',
        'suasana',
        'aktivitas_air',
        'dekat_pantai',
        'kuliner',
        'hasil_rekomendasi',
    ];
}
