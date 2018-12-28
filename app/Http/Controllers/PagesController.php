<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('public.index');
    }
    public function index($id){
        return view('public.play')->with('id',$id);
    }
}
