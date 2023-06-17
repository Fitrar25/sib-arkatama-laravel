<?php

namespace App\Http\Controllers;

use App\Models\user;
use App\Models\role;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function homepage(){
        return view('user.landing');
    }

    public function index(){
        $users = user::with('role')->get( );
        return view('user.index', compact('users'));

    }

    public function create(){
        $roles = role::all();
        return view('user.create', compact('roles'));
    }

    public function store(Request $request){
        $users = user::create([
            'role_id' => $request->role,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => $request->password,
        ]);
        return redirect()->route('user.index');
    }


}
