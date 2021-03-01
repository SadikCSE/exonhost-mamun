<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebHostingController extends Controller
{
    public function webInfo(){
        return view ('frontend.web-hosting');
    }
}
