<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function loadView($name){
        return view('users',['name' => $name]);
    }

    public function viewLoad(){
        $names = ['anil', 'pitter', 'loki', 'bruce'];
        return view('users', ['users' => $names]);
    }
}
