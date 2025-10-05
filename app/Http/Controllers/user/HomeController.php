<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('user.shop');
    }

    public function home()
    {
        return view('user.home');
    }

    public function fashion()
    {
        return view('user.product');
    }
}
