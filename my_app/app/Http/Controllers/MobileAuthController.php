<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MobileAuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.mobile-login');
    }
    public function login(Request $request)
    {
        $request->validate(
            [
                'mobile' => ['required', 'digits:10'],
                'password' => ['required', 'min:8']
            ]
        );
        if (Auth::attempt(['mobile' => $request->mobile, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
        return back()->withErrors(
            [
                'mobile' => 'Invalid mobile or password'
            ]
        );
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect('/mobile-login');
    }
}
