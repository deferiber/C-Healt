<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Question extends Model
{
    use HasApiTokens, HasFactory;

    protected $fillable = [
        'question',
        'option_1',
        'option_2',
        'option_3',
        'option_4',
        'option_5',
        'option_6',
        'option_7',
        'option_8',
        'option_9',
        'option_10',
        'option_11',
        'option_12',
        'score_1',
        'score_2',
        'score_3',
        'score_4',
        'score_5',
        'score_6',
        'score_7',
        'score_8',
        'score_9',
        'score_10',
        'score_11',
        'score_12',
        'answer',
        'total_score',
    ];

}
