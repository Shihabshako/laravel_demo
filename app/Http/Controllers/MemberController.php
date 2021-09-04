<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    //
    public function show(){
        $data = Member::paginate(5);
        return view('list', ['listData' => $data]);
    }

    public function addMember(Request $request){
        //return $request->input();

        $member = new Member;
        $member->name = $request->name;
        $member->email = $request->email;
        $member->address = $request->address;
        $flag = $member->save();
        if($flag){
            $request->session()->flash('memberAdd', 'success');

        }else{
             $request->session()->flash('memberAdd', 'error');

        }
        return redirect('addmember');
    }

    public function deleteMember($id, Request $request){
        $data = Member::find($id);
        $flag = $data->delete();
        if($flag){
            $request->session()->flash('memberDelete', 'success');

        }else{
             $request->session()->flash('memberDelete', 'error');

        }

        return redirect('list');
    }

    public function memberDetails($id){
        $data = Member::find($id);
        return view('editmember',['data' => $data]);
    }

    public function updateMember(Request $request){
        //return $request->input();
        $id = $request->id;
        $member = Member::find($id);
        $member->name = $request->name;
        $member->email = $request->email;
        $member->address = $request->address;
        $flag = $member->save();
        if($flag){
            $request->session()->flash('memberEdit', 'success');

        }else{
             $request->session()->flash('memberEdit', 'error');

        }
        return redirect('list');
    }
}
