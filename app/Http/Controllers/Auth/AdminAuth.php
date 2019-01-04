<?php

namespace App\Http\Controllers\Auth;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminAuth extends Controller
{
    public function login(Request $request){
        if(Auth::guard('admin')->attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect()->route('admin.home');
        }
        return redirect()->route('admin.login');
    }

    public function showLoginForm(){
        return view('admin.auth.login');
    }
}
