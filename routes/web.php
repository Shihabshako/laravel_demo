<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
    //we can redirect
    return redirect('contact');
});

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/about/{name}', function ($name) {
   // echo $name;
    return view('about', ['name' => $name]);
});

// we can use small syntax

// Route::view('about', 'about');
Route::view('contact', 'contact');