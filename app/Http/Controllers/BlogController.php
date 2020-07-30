<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function Home(){
        return view('Home');
    }
    public function Tentang(){
        return view('Tentang');
    }
    public function Kontak(){
        return view('Kontak');
    }
}
