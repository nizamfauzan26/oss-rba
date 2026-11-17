<?php

use App\Http\Controllers\DPproyekController;
use App\Http\Controllers\ListIzinController;
use App\Http\Controllers\NIBController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::resource('dpproyek', DPproyekController::class)->except(['create', 'edit']);
Route::resource('nib', NIBController::class)->except(['create', 'edit']);
Route::resource('list-izin', ListIzinController::class)->except(['create', 'edit']);