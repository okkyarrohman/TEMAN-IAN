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
    return view('admin.dashboard');
});

Route::get('/ss', function () {
    return view('welcome');
});






// Auth







// Route untuk Murid
Route::get('/login', function () {
    return view('sign-in');
});

Route::get('/register', function () {
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
Route::get('/admin/dashboard',function(){
    return view('admin.dashboard');
});

Route::get('/admin/data-user',function(){
    return view('admin.data-user.index');
});

Route::get('/admin/data-user/1',function(){
    return view('admin.data-user.read');
});


Route::get('/admin/materi',function(){
    return view('admin.materi.create');
});


Route::get('/admin/list-tugas',function(){
    return view('admin.tugas.index');
});

Route::get('/admin/tambah-tugas',function(){
    return view('admin.tugas.create');
});

Route::get('/admin/detail-tugas',function(){
    return view('admin.tugas.view');
});

Route::get('/admin/list-penilaian',function(){
    return view('admin.penilaian.index');
});

Route::get('/admin/detail-penilaian',function(){
    return view('admin.penilaian.view');
});

Route::get('/admin/edit-penilaian',function(){
    return view('admin.penilaian.edit');
});

// End Route Untuk Admin
