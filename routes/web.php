<?php

use App\Http\Controllers\AnswerController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('dashboard');

Route::middleware(['guest'])->group(function () {
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.post');

    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');
});

Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/events', [EventController::class, 'index'])
        ->name('events.index');

    Route::post('/events', [EventController::class, 'store'])
        ->name('events.store');

    Route::get('/events/create', [EventController::class, 'create'])
        ->name('events.create');

    Route::get('/events/{event:uuid}', [EventController::class, 'view'])
        ->name('events.view');

    Route::get('/events/{event:uuid}/answers', [AnswerController::class, 'index'])
        ->name('answers.index');

    Route::get('/events/{event:uuid}/answers/create', [AnswerController::class, 'create'])
        ->name('answers.create');
});

Route::get('/e/{event:uuid}', [AnswerController::class, 'create'])
    ->name('answers.create.short');

Route::post('/events/{event:uuid}/answers', [AnswerController::class, 'store'])
    ->name('answers.store');