<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function __construct(){
        // $this->middleware('auth');
    }

    public function index(){
        return view('public.pages.index');
    }
    public function play(){
        $admin = \App\Admin::find(1);
        echo $admin->is_super() ? 'yes' : 'no';
    }
}
