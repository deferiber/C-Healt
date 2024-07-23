<?php

use App\Http\Controllers\API\AnswerApiController;
use App\Http\Controllers\API\ChatApiController;
use App\Http\Controllers\API\EducationApiController;
use App\Http\Controllers\API\LabcvtApiController;
use App\Http\Controllers\API\QuestionApiController;
use App\Http\Controllers\API\UserApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return response()->json([
        'status' => true,
        'data' => $request->user(),
        'message'  => 'Api user versi 2',
    ]);
})->middleware('auth:sanctum');
