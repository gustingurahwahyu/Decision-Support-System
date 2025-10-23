<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DssController;

Route::get('/', [DssController::class, 'index']);
Route::post('/hasil', [DssController::class, 'process'])->name('proses');
