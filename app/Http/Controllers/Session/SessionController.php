<?php

namespace App\Http\Controllers\session;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    //menampilkan isi session
    public function tampilkanSession(Request $request)
    {
        if($request->session()->has('nama')){
            echo $request->session()->get('nama');
        }else{
            echo 'tidak ada dalam session';
        }
    }

    //membuat session
    public function buatSession(Request $request)
    {
        $request->session()->put('nama','Rizal Gumelar');
        echo 'Data telah ditambahkan dalam session';
    }

    // menghapus session
    public function hapusSession(Request $request)
    {
        $request->session()->forget('nama');
        echo 'Data telah dihapus dari session';
    }

}
