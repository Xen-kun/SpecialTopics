<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\FoodController;

Route::get('/', function(){
    return view('homepage');
})->name('homepage');
