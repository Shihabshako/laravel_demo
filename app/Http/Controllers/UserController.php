<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function loadView($name){
        return view('users',['name' => $name]);
    }
}
