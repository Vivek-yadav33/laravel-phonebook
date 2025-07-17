<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    //
    public function index()
    {
        return view('auth.login');
    }
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            throw ValidationException::withMessages([
                'email' => 'Your credentials does not match'
            ]);
        }
        session()->flash('success', 'User logged in');
        return redirect()->route('dashboard');
    }
    public function destroy()
    {
        Auth::logout();
        session()->flash('success', 'User logged out successful');
        return redirect()->route('login.index');
    }
}
