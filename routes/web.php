<?php

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\GuestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/guests', [GuestController::class, 'index'])->name('guests.index');
Route::get('/greetings', [CommentsController::class, 'index']);
