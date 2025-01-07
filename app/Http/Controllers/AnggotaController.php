<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    // Store Anggota data
    public function store(Request $request)
    {
        // Validate the incoming form data
        $validatedData = $request->validate([
            'IDAnggota' => 'required|unique:anggota,IDAnggota|max:255',
            'Nama_Anggota' => 'required|max:255',
            'Alamat' => 'required|max:255',
            'Jurusan' => 'required|max:255',
        ]);

        // Generate IDDaftar (automatically incrementing number)
        $lastAnggota = Anggota::orderBy('IDDaftar', 'desc')->first(); // Get the last entry based on IDDaftar
        $newIDDaftar = $lastAnggota ? (intval($lastAnggota->IDDaftar) + 1) : 1; // Increment last IDDaftar or set to 1 if no records

        // Create a new Anggota record
        $anggota = new Anggota();
        $anggota->IDAnggota = $request->IDAnggota;
        $anggota->Nama_Anggota = $request->Nama_Anggota;
        $anggota->Alamat = $request->Alamat;
        $anggota->Jurusan = $request->Jurusan;
        $anggota->IDDaftar = str_pad($newIDDaftar, 4, '0', STR_PAD_LEFT); // Format the IDDaftar (e.g., 0001)
        $anggota->save();

        // Redirect to a success page or back to the form with a success message
        return redirect()->route('home')->with('success', 'Registration successful!');
    }
}
