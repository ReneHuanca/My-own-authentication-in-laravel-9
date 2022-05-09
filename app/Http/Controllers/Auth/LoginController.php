<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function login(LoginRequest $request)
    {
        if (!Auth::attempt($request->only('email', 'password'), $request->filled('remember'))) {
            throw ValidationException::withMessages([
                'email' => __('auth.failed')
            ]);
        }
        $request->session()->regenerate();

        return redirect()
            ->intended('dashboard')
            ->with('status', 'You are logged in');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()
            ->to('/')
            ->with('status', 'Has cerrado session');
    }
}
