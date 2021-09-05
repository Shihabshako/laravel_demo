<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\RandomUserController;
use App\Http\Controllers\MemberController;




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
    return view('welcome');
    //we can redirect
    //return redirect('contact');
});

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/about/{name}', function ($name) {
   // echo $name;
    return view('about', ['name' => $name]);
});

// we can use small syntax but we cant pass the data from the url to view

// Route::view('about', 'about');
Route::view('contact', 'contact');


// laravel 6 and 7 we call contorller like 

//Route::get('users', "Users@index" );


//laravel 8 invoke controller method


//Route::get('users/{user}', [Users::class, 'index']);

// Route::get('users/{name}', [UserController::class,'loadView']);

//Route::get('users', [UserController::class,'viewLoad']);
// Route::view('login', 'login');
Route::get('login', function () {
    if(session()->has('username')){
        return view('profile');
    }
    return view('login');
});
Route::get('users', [UserController::class, 'viewLoad']);
Route::view('noaccess', 'noaccess');
Route::post('usersAuth', [UserAuthController::class, 'userLogin']);
Route::view('profile', 'profile')->middleware('userSessionCheck');

Route::get('/logout', function () {
    if(session()->has('username')){
        session()->pull('username');
    }

    return redirect('login');
}); 

Route::view('upload', 'upload');
Route::post('uploadFile', [UploadController::class,'index']);
Route::view('home', 'home');
Route::get('customers', [UserController::class,'getCustomers']);

Route::get('randomUsers', [RandomUserController::class, 'getRandomUser'] );

Route::get('list', [MemberController::class, 'show']);
Route::view('addmember', 'addmember');
Route::post('addmember', [MemberController::class, 'addMember']);
Route::get('delete/{id}', [MemberController::class, 'deleteMember']);
Route::get('edit/{id}', [MemberController::class, 'memberDetails']);
Route::post('edit/updateMember', [MemberController::class, 'updateMember']);

Route::get('dboperation', [MemberController::class, 'dbOperation']);