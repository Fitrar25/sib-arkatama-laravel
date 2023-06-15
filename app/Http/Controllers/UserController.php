<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function homepage(){
        return view('user.landing');
    }

    public function index(){
        return view('user.index');

    }

    public function create(){
        return view('user.form');
    }


}
