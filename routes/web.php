<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WelcomeController::class,'welcome'])->name('Welcome');
Route::resource('note', NoteController::class);
