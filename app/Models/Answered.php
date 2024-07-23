<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answered extends Model
{
    use HasFactory;

    // protected $table='questions';
    protected $fillable = [
        'answered',
        'scores',
        'total_scores',
        'question_id',
        'user_id'


    ];
}
