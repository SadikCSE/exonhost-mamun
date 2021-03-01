<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResellerHostingController extends Controller
{
    public function resellerInfo(){
      return view('frontend.reseller-hosting');
    }
}
