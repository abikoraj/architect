<?php

namespace App\Http\Controllers\Theme2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('theme2.home.index');
    }
    public function about(){
        return view('theme2.about.index');
    }

}
