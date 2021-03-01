<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SsdVpsController extends Controller
{
    public function ssdInfo(){
        return view ('frontend.ssd-vps');
    }
}
