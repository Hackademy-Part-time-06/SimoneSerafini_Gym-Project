<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage(){
        return view('homepage');
    }

 public function corsi(){
        return view('corsi');
    }

 public function contatti(){
        return view('contatti');
    }


}