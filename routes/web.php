<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PhoneController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [ContactController::class, 'index'])->name('index');

Route::post('/', [ContactController::class, 'store'])->name('store');

Route::get('/{contact}', [ContactController::class, 'show'])->name('show');

Route::post('/{contact}/contacts', [PhoneController::class, 'store'])->name('contact.store');

