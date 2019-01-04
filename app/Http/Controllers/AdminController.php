<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
    }

    public function index(){
        $user = \App\User::all();
        return view('admin.pages.index')->with('users',$user);
    }

    public function showRegisterForm(){
        $is_super = Auth()->user()->super ? true : false;
        if($is_super){
            return view('admin.auth.register');
        }
        return redirect()->route('admin.home');
    }

    public function register(Request $request){
        // $validatedData = $request->validate([
        //     'fullname' => 'required|max:255',
        //     'email' => 'required|email',
        //     'password' => 'required|min:6|confirmed',
        // ]);
        // $user = new \App\User;
        // $user->name = $request->input('fullname');
        // $user->email = $request->input('email');
        // $user->password = Hash::make($request->input('password'));
    }
}
