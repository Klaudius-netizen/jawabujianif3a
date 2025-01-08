<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{

    public function index()
    {
        // Retrieve all books from the database (or use other queries if needed)
        $anggota = Anggota::all(); 

        // Pass the $buku variable to the Blade view
        return view('daftarAnggota', compact('anggota'));
    }
    // Store Anggota data
    public function create()
    {
        return view('anggota.create'); // Make sure to create this Blade view
    }

    // Store the new book in the database
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'IDAnggota' => 'required|string|max:255',
            'Nama_Anggota' => 'required|string|max:255',
            'Alamat' => 'required|string|max:255',
            'Jurusan' => 'required|string|max:255',
            'IDDaftar' => 'required|integer|max:100',
        ]);

        // Create a new book record in the database
        Anggota::create([
            'IDAnggota' => $request->IDAnggota,
            'Nama_Anggota' => $request->Nama_Anggota,
            'Alamat' => $request->Alamat,
            'Jurusan' => $request->Jurusan,
            'IDDaftar' => $request->IDDaftar,
        ]);

        // Redirect back to the books page
        return redirect()->route('daftarAnggota');
    }
}
