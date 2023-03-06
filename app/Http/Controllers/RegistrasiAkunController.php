<?php

namespace App\Http\Controllers;

use App\Models\RegistrasiAkun;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class RegistrasiAkunController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::orderBy('created_at', 'desc')->get();
        return view('registrasi-akun.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('registrasi-akun.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            User::create($request->validated());

            return redirect()->route('registrasi.create')->with('success','Akun Baru berhasil ditambahkan.');
        } catch (Exception $e) {
            return redirect()->route('donor-darah.create')->with('error', 'Akun Baru gagal ditambahkan.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(RegistrasiAkun $registrasiAkun)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RegistrasiAkun $registrasiAkun)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RegistrasiAkun $registrasiAkun)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RegistrasiAkun $registrasiAkun)
    {
        //
    }
}
