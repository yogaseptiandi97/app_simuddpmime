<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('login.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LoginRequest $request)
    {
        if (Auth::attempt($request->validated())) {
            return redirect()->route(RouteServiceProvider::HOME)->with('success', 'Anda telah berhasil login.');
        }

        return redirect()->route('login.create')->with('error', 'Akun tidak ditemukan.');
    }
}
