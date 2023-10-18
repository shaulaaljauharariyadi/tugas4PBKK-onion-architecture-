<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulir extends Model
{
    use HasFactory;

    protected $table = 'formulirs';

    protected $fillable = [
        'nama',
        'email',
        'alamat',
        'nilai',
        'gambar',
    ];
}
