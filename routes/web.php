<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('crud.main');
})->name('crud.index');

Route::get('/create', function () {
    return view('crud.create');
})->name('crud.create');

