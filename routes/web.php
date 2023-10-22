<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

Route::get('/gor', function () {
    $gor = DB::table('gors')->get();

    return view('gor', ['gor' => $gor]);
});

Route::get('/gym', function () {
    $gym = DB::table('gyms')->get();

    return view('gym', ['gym' => $gym]);
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/blog-post-details', function () {
    return view('blog-post-details');
});