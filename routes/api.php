<?php

use App\Http\Controllers\GuestController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('/guests', [GuestController::class, 'store'])->name('guests.store');
Route::get('/guests/{id}', [GuestController::class, 'getGuest'])->name('guests.get');
