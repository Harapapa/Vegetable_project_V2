<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Auth\Events\Login;

class LoginController extends Controller
{
    public function create()
    {
        return view('login');
    }

    public function store(LoginRequest $request)
    {
        if (!auth()->attempt($request->validated())) {

            return redirect('/login')
                ->withInput()
                ->withErrors(['email' => 'Hibas bejelentkezes']);
        }

        return redirect('/')->with(["message" => 'Sikeres bejelentkezes']);
    }


    public function destroy()
    {
        auth()->logout();


        return redirect('/');
    }
}
//mailtrap.io
