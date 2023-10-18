<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormulirController;

// Menampilkan formulir
Route::get('/formulir', [FormulirController::class, 'showForm'])->name('formulir');

// Mengirimkan formulir
Route::post('/formulir/submit', [FormulirController::class, 'submitForm'])->name('submit-form');

// Menampilkan halaman hasil isian formulir
Route::get('/hasil-formulir', [FormulirController::class, 'showHasil'])->name('hasil-formulir');

// routes/data

Route::get('/formulir/{id}', [FormulirController::class, 'showData'])->name('detail.formulir');
