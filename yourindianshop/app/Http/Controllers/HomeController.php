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
}
