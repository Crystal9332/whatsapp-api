<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    //Show Login page
    public function loginShow()
    {
        return view('login');
    }

    // Login Auth Info
    public function loginAction(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('/dashboard'); // Redirect to the intended URL or any default URL
        }

        return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
    }

    // Show Sign Up page
    public function register()
    {
        return view('register');
    }

    // Register Auth Info
    public function registerAction(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $name = "admin";
        $email = $request->input('email');
        $password = $request->input('password');

        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
            'email_verified_at' => null,
        ]);

        // Optionally, you can log in the user after registration
        // auth()->login($user);

        return redirect()->route('dashboard')->with([
            'code' => 'success',
            'message' => 'Registration successful. Welcome to the dashboard!',
        ]);
    }

    // Log the user out
    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}