<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use App\Models\User;

class LoginController extends Controller
{
    public function create()
    {
        return view('login');
    }

    public function store(LoginRequest $request)
    {
        auth()->attempt($request->validated());

        return redirect('/');
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/');
    }
}