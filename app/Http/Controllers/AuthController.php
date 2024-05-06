<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;



class AuthController extends Controller
{
    public function register(Request $request)
    {

        $validatedData = $request->validate([
            'email' => 'required|email|max:120|unique:users',
            'username' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
        $user = new Users();
        $user->email = $validatedData['email'];
        $user->username = $validatedData['username'];
        $user->password = Hash::make($validatedData['password']);

        $user->save();

        return redirect()->route('login')->with('success', 'Registration successful!');
    }


    public function showRegistrationForm()
    {
        return view('pages.signup');
    }

    public function showLoginForm()
    {
        return view('pages.login');
    }

    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
    
        $user = Users::where('email', $email)->first();
    
        // if ($user && Hash::check($password, $user->password)) {
            Session::put('username', $user->username);
            return redirect()->intended('Dashboard');
        //  }
    
        return redirect()->back()->withInput()->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout(Request $request)
    {
        if (!Session::has('user')) {
            return redirect()->route('login')->with('error', 'You must be logged in to access the dashboard.');
        }
        session::forget('user');
        return redirect()->back()->withInput()->withErrors(['email' => 'Invalid credentials']);
    }
}
