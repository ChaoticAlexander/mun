<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('public.pages.index');
    }
    public function play(){
        $role = \App\Role::find(3);
        return $role->users()->get();
    }
}
