<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formValidController extends Controller
{
    public function input(){
        return view('formValidInput');
    }
    public function process(Request $request){
        $message = [
            'required' => 'atribut Harus diisi',
            'min'   => 'atribut harus diisi minimal :min ',
            'max'   => 'atribut diisi maksimal :max '
        ];
        $this->validate($request,[
            'nama'=>'required|min:5|max:20',
            'pekerjaan'=>'required',
            'usia'=>'required|numeric'
        ],$message);
        return view('formValidproses',['data'=>$request]);
    }
}
