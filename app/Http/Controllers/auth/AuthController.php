<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Mail\PasswordResetLinkMail;
use App\Mail\WelcomeMail;
use App\Models\admin\QrModel;
use App\Models\AuditTrailModel;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\admin\AppInfoModel;
use App\Models\UserFashion;


class AuthController extends Controller
{
 
public function register(Request $request)
{
    $request->validate([
        'fullname' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:user_fashion',
        'password' => 'required|string|min:6|confirmed',
    ]);

    $user = UserFashion::create([
        'fullname' => $request->fullname,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    Auth::guard('fashion')->login($user);

    return redirect()->route('user.home')->with('success', 'Account created successfully! 🎉');
}

public function login(Request $request)
{
    $credentials = $request->only('email', 'password');

    if (Auth::guard('fashion')->attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->route('user.shop')->with('success', 'Welcome back! 👋');
    }

    return back()->withErrors([
        'email' => 'Invalid credentials provided.',
    ]);
}


public function logout(Request $request)
{
    Auth::guard('fashion')->logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect()->route('login');
}



}
