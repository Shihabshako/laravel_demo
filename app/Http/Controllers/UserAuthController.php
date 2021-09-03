<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuthController extends Controller
{
    //
    public function userLogin(Request $request){
        $data = $request->input();
        $request->session()->put('username',$data['username']);
        $request->session()->flash('userLoginStatus', $data['username']);
        return redirect('profile');
    }
}
