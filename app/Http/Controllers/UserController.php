<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

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

    public function getData(Request $req){
        $req->validate([
            'username' => 'required',
            'password' => 'required',

        ]);
        return $req->input();
    }

    public function getCustomers(){
        return User::all();
    }

}
