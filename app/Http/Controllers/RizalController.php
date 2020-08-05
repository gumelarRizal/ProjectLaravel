<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;

class RizalController extends Controller
{
    public function enkripsi()
    {
        $encrypted = Crypt::encryptString('belajar laravel');
        $decrypted = Crypt::decryptString($encrypted);
        echo "hasil enkripsi : ".$encrypted;
        echo "<br/>";
        echo "hasil dekripsi : ".$decrypted;
    }
    public function hash()
    {
        $hashPasswordSaya = Hash::make('rizal300898');
        echo $hashPasswordSaya;
    }
}
