<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('public.pages.index');
    }
    public function play(){
        // return view('public.play')->with('id',$id);
    }
}
