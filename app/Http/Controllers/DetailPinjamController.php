<?php

namespace App\Http\Controllers;

use App\Models\Peminjaman;
use Illuminate\Http\Request;

class DetailPinjamController extends Controller
{
    public function create()
    {
        // Return the view where users can create a new loan
        return view('pinjam');
    }

    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'IDAnggota' => 'required|string|max:255',
            'IDBuku' => 'required|string|max:255',
        ]);

        // Create a new loan record in the database
        Peminjaman::create([
            'IDAnggota' => $request->IDAnggota,
            'IDBuku' => $request->IDBuku,
            'Tgl_Pinjam' => now(),
            'Tgl_Kembali' => now()->addDays(7),
        ]);

        // Redirect to the route after successful creation
        return redirect()->route('detailpinjam');
    }
}
