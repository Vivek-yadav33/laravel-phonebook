<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    //
    public function index()
    {
         return view('auth.register');

    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name'=>'required|min:3',
            'last_name'=>'required|min:3',
            'email'=>'required|email|unique:users,email',
            'password' =>'required|min:8|max:16'
        ]);
        
        User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => $request->password
        ]);
        session()->flash('success','User register Successfully');   
        return redirect()->route('login.index');
    }
}