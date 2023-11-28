<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class customcontroller extends Controller
{
    function home(){
        return view('welcome');
    }
    function about(){
        return view('about');
    }
    function contact(){
        return view('contact');
    }
}
