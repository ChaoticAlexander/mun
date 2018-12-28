<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $user = \App\User::all();
        return view('admin.pages.index')->with('users',$user);
    }
}
