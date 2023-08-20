<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ss', function () {
    return view('welcome');
});




// Route untuk Murid
Route::get('/sign.in', function () {
    return view('sign-in');
});

Route::get('/sign.up', function () {
    return view('sign-up');
});

// End Route Untuk Murid



// Route Untuk Guru
Route::get('/guru-dashboard',function(){
    return view('guru.dashboard');
});

Route::get('',function(){

});


// End Route Untuk Guru



// Route Untuk Admin
Route::get('/admin-dashboard',function(){
    return view('admin.dashboard');
});

// End Route Untuk Admin
