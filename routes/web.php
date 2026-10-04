<?php

use App\Http\Controllers\BookController2;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('books', BookController2::class);