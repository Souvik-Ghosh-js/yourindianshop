<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function elements(){
        return view('elements');
    }
    public function portfolio(){
        return view('portfolio');
    }
    public function single(){
        return view('single');
    }
    public function signup(){
        return view('signup');
    }
    public function login(){
        return view('login');
    }
    public function otpcheck(){
        return view('otpcheck');
    }
    public function setpassword(){
        return view('setpage');
    }
}
