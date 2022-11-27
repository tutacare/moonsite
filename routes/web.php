<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;

Route::get('/', WelcomeController::class)->name('page');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
