<?php

use App\Http\Controllers\DaftarController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/poster', [DaftarController::class, 'showForm']);
Route::post('/poster/submit', [DaftarController::class, 'submit']);