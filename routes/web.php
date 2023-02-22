<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

Route::get('/', WelcomeController::class)->name('page');
Route::get('/berita', [WelcomeController::class, 'berita'])->name('berita');
Route::get('/berita/{slug}', [WelcomeController::class, 'beritaDetail'])->name('berita.show');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
