<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller {

    public function home() {
        $people = array(0 => "Ion", 1 => "Leana", 2 => "Vasile", 3 => "Maria");
        return view('home', compact('people'));
    }

    public function about() {
         $people = array(0 => "Ion", 1 => "Leana", 2 => "Vasile", 3 => "Maria");
        return view('about', compact('people'));
    }

}
