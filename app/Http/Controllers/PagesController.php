<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function first(){
        return view('first');
    }

    public function about(){
        return view('about');
    }

    public function contacts(){
        return view('contacts');
    }

    public function contactus(){
        return view('contactus');
    }

    public function gallery(){
        return view('gallery');
    }

    public function games(){
        return view('games');
    }

    public function prices(){
        return view('prices');
    }
}
