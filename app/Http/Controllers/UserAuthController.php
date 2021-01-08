<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAuthController extends Controller
{
    public function login(Request $request)
    {
        if ($request->getMethod() == "POST") {
            if( !Auth::attempt(['email' => $request->email, 'password' => $request->password])){
                return redirect()->back()->with('message','username password wrong');
            }else{
                return redirect()->route('dashboard');
            }
        }else {
            return view('auth.login');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }
}
