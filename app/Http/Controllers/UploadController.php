<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    //
    public function index(Request $request){

        if(!$request->file('file')){
            $request->session()->flash('uploadFile', 'error');
            return redirect('upload');

        }

        $extension = $request->file('file')->getClientOriginalExtension();
        
        

        $var = $request->file('file')->storeAs('docs', 'file_'.now()->timestamp.'.'.$extension);

        if($var ){
            $request->session()->flash('uploadFile', 'success');
        }else{
            $request->session()->flash('uploadFile', 'error');
        }

        return redirect('upload');
       
    }
}
