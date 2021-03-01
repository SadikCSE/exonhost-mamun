<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DedicatedServerController extends Controller
{
    public function dedicatedInfo(){
        return view('frontend.dedicated-server');
    }
}
