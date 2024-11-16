<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\FoodController;

// Route for the homepage
Route::get('/', function () {
    return view('homepage');
})->name('homepage');

// Route for the Service page
Route::get('/service', function () {
    return view('pages.service');
})->name('service');

// Route for the Menu page
Route::get('/menu', function () {
    return view('pages.menu');
})->name('menu');

// Route for the Shops page
Route::get('/shops', function () {
    return view('pages.shops');
})->name('shops');


Route::view('/under-construction', 'under-construction')->name('under.construction');