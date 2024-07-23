<?php

use App\Http\Controllers\API\MessageApiController;
use App\Http\Controllers\API\AnsweredApiCtroller;
use App\Http\Controllers\API\AuthApiController;
use App\Http\Controllers\API\ChatApiController;
use App\Http\Controllers\API\EducationApiController;
use App\Http\Controllers\API\LabcvtApiController;
use App\Http\Controllers\API\QuestionApiController;
use App\Http\Controllers\API\RecommendationApiController;
use App\Http\Controllers\API\UserApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Auth user dengan token
Route::middleware('auth:sanctum')->group(function(){
    Route::apiResource('Users', UserApiController::class, array('as' => 'api'));
    Route::get('logout', [AuthApiController::class, 'logout']);
});

//Auth user tanpa token
Route::post('register', [AuthApiController::class, 'register']);
Route::post('login', [AuthApiController::class, 'login']);
Route::post('logout', [AuthApiController::class, 'logout']);


//menggunakan authentication
Route::middleware('auth:sanctum')->group(function() {
    Route::resource('users', UserApiController::class, array('as' => 'api'));
    Route::resource('educations', EducationApiController::class, array('as' => 'api'));
    Route::resource('questions', QuestionApiController::class, array('as' => 'api'));
    Route::resource('answereds', AnsweredApiCtroller::class, array('as' => 'api'));
    Route::resource('labcvts', LabcvtApiController::class, array('as' => 'api'));

    //Rekomendasi
    // Route::resource('recommendations', RecommendationApiController::class, array('as' => 'api'));
    Route::get('/recommendation', [RecommendationApiController::class, 'getRecommendation']);

    //Chat
    Route::get('users/role/3', [ChatApiController::class, 'getCounselors']);
    Route::post('chats', [ChatApiController::class, 'sendMessage']);
    Route::get('chats/{userId}', [ChatApiController::class, 'getChats']);
});


//tidak menggunakan authentication
Route::resource('users', UserApiController::class, array('as' => 'api'));
Route::resource('educations', EducationApiController::class, array('as' => 'api'));
Route::resource('questions', QuestionApiController::class, array('as' => 'api'));
Route::resource('answereds', AnsweredApiCtroller::class, array('as' => 'api'));
Route::resource('labcvts', LabcvtApiController::class, array('as' => 'api'));
Route::resource('chats', ChatApiController::class, array('as' => 'api'));
// Route::resource('recommendation', RecommendationApiController::class, array('as' => 'api'));
Route::get('/recommendation', [RecommendationApiController::class, 'getRecommendation']);
Route::get('/', function () {
    return response()->json(['message' => 'API is working'], 200);
});

//Chat
// Route::get('users/role/3', [ChatApiController::class, 'getCounselors']);
// Route::post('chats', [ChatApiController::class, 'sendMessage']);
// Route::get('chats/{userId}', [ChatApiController::class, 'getChats']);

//Message dengan Auth Middleware
// Route::middleware('auth:sanctum')->prefix('chat')->group(function () {
//     Route::post('/send-message', [MessageApiController::class, 'sendMessage']);
//     Route::get('/messages/{sender_id}/{receiver_id}', [MessageApiController::class, 'getMessages']);
//     Route::get('/download-file/{id}', [MessageApiController::class, 'downloadFile']);
// });
