<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
        $nama = 'Rizal bin Maman';
        $pelajaran = ["Algoritma dan pemrograman","kalkulus","Pemrograman Web"];
        return view('biodata',['nama'=>$nama,'matkul'=>$pelajaran]);
    }
}
