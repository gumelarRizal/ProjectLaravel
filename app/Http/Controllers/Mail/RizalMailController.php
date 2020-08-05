<?php

namespace App\Http\Controllers\Mail;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\rizalMail;

class RizalMailController extends Controller
{
    public function index()
    {
        Mail::to('mrizalgumelar@gmail.com')->send(new rizalMail);
        return 'email telah dikirim';
    }
}
