<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    //
    public function show(){
        $data = Member::paginate(3);
        return view('list', ['listData' => $data]);
    }
}
