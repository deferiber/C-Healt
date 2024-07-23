<?php

use App\Http\Controllers\AnswerController;
use App\Http\Controllers\AssesmentController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\LabcvtController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\RecommendationController;

//Utama
Route::get('/', function () {
    return view('home');
});

//User
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified','user'])->name('user.dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

//Admin
Route::get('/home', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified','admin'])->name('admin.dashboard');

//CRUD admin
Route::middleware(['auth', 'admin'])->group(function() {
    Route::resource('users', UserController::class);
    Route::resource('educations', EducationController::class);
    Route::resource('questions', QuestionController::class);
    Route::resource('recommendations', RecommendationController::class);
    Route::resource('answers', AnswerController::class);
    Route::resource('chats', ChatController::class);
    Route::resource('labcvts', LabcvtController::class);
});

//Konselor
Route::get('/konselor', function () {
    return view('konselor.dashboard');
})->middleware(['auth', 'verified','konselor'])->name('konselor.dashboard');


require __DIR__.'/auth.php';
