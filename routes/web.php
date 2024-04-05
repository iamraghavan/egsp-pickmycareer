<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\FormController;

Route::post('/submit-form', [FormController::class, 'submitForm'])->name('submitForm');


Route::get('/', [PagesController::class, 'index']);
Route::get('/thanks', [PagesController::class, 'thanks']);
