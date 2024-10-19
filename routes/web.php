<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;

Route::get('/', function(){
    return view('homepage');
})->name('homepage');
