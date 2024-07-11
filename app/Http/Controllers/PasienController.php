<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    $validatedData = $request->validate([
        'nama_pasien' => 'required|string|max:255',
        'alamat' => 'required|string|max:255',
        'usia' => 'required|integer',
        'jenis_kelamin' => 'required|string',
        'keluhan' => 'required|string',
    ]);
        $pasien = new Pasien();
        $pasien->nama_pasien = $validatedData['nama_pasien'];
        $pasien->alamat = $validatedData['alamat'];
        $pasien->usia = $validatedData['usia'];
        $pasien->jenis_kelamin = $validatedData['jenis_kelamin'];
        $pasien->keluhan = $validatedData['keluhan'];
        $pasien->save();
        return view('users.konsultasi', compact('pasien'));
        // return redirect()->route('pasien.store')->with('success', 'Pasien berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
