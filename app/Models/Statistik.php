<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statistik extends Model
{
    protected $table = 'statistik';


    protected $fillable = [
        'punggung',
        'posisi',
        'nama_pemain',
        'penampilan',
        'gol',
        'assists',
        'kartu_kuning',
        'kartu_merah'
    ];

}
