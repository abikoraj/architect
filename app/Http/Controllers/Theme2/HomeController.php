<?php

namespace App\Http\Controllers\Theme2;

use App\Http\Controllers\Controller;
use App\Mail\Contacted;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index(){
        return view('theme2.home.index');
    }
    public function about(){
        return view('theme2.about.index');
    }

    public function services(){
        return view('theme2.service.index');
    }
    public function contact(){
        return view('theme2.contact.index');
    }

    public function message(Request $request){
        $data=$request->all();
        $user=new User();
        $user->email=env('owner_email',"cms111000111@gmail.com");
        Mail::to($user)->send(new Contacted($data));
        return redirect()->back();
    }

}
