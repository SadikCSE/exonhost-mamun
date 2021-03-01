<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TosController extends Controller
{
    public function tosInfo(){
        return view('frontend.tos');
    }
}