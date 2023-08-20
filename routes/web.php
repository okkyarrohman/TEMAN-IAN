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

Route::get('/admin/data-murid',function(){
    return view('admin.data-user.data-murid');
});

Route::get('/admin/data-guru',function(){
    return view('admin.data-user.data-guru');
});

Route::get('/admin/tambah-materi',function(){
    return view('admin.materi.create');
});

Route::get('/admin/list-materi',function(){
    return view('admin.materi.index');
});

// End Route Untuk Admin
