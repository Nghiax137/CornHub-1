<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/detail', function () {
    return view('detail');
});
Route::get('/genres', function () {
    return view('genres');
});
Route::get('/watch', function () {
    return view('watch');
});
