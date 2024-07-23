<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Labcvt extends Model
{
    use HasApiTokens, HasFactory;

    protected $fillable = [
        'nama_lembaga',
        'alamat',
        'logo',
        'hasil_lab',
        'map'
    ];
}
