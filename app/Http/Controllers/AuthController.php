<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function home(){
        return view('pages.forntend.home');
    }


}
