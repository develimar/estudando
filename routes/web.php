<?php

use Illuminate\Support\Facades\Route;

Route::get('/contato', [\App\Http\Controllers\Site\SiteController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});
