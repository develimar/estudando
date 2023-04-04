<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\SiteController;
Use App\Http\Controllers\Admin\{SupportController};


Route::get('/home', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.home');

Route::post('/supports', [SupportController::class, 'store'])->name('supports.store');
Route::get('/supports/create', [SupportController::class, 'create'])->name('supports.create');
Route::get('/supports',[SupportController::class, 'index'])->name('supports.index');
Route::get('/contato', [SiteController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});


