<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Form extends Controller
{
    public function register(){
        return view('registration');
    }
}
