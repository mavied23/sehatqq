<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    public function obat()
    {
        $obat = Obat::all();
        return view('users.obat', compact('obat'));
    }

    public function store(Request $request)

    {
        $request->validate([
            'no_obat' => 'required|integer',
            'nama_obat' => 'required|string|max:255',
            'deskripsi_obat' => 'required|string|max:255',
            'indikasi_umum' => 'required|string|max:255',
            'komposisi' => 'required|string|max:255',
            'dosis' => 'required|string|max:255',
            'aturan_pakai' => 'required|string|max:255',
        ]);
        
        $obat = new Obat();
        $obat->no_obat = $request['no_obat'];
        $obat->nama_obat = $request['nama_obat'];
        $obat->deskripsi_obat = $request['deskripsi_obat'];
        $obat->indikasi_umum = $request['indikasi_umum'];
        $obat->komposisi = $request['komposisi'];
        $obat->dosis = $request['dosis'];
        $obat->aturan_pakai = $request['aturan_pakai'];
        $obat->save();
        return redirect()->route('obat.index');
    }
}
