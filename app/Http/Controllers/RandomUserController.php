<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class RandomUserController extends Controller
{
    public function getRandomUser(Request $request){
        $page = $request->page ? $request->page : 1;
        $data = Http::get("https://reqres.in/api/users?page=".$page);
        return view('randomuser',['data' => $data['data'] , 'page'=>$page]);
    }
}
