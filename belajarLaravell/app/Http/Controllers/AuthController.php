<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('page.register');
    }

    public function welcome (Request $request)
    {
        $full_name = $request->input('full_name');
        $last_name = $request->input('last_name');

        return view('page.welcome', ['full_name' => $full_name, 'last_name' => $last_name]);
    }
}
