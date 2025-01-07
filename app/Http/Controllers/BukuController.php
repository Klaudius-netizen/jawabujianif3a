<?php

// app/Http/Controllers/BukuController.php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Buku; 

class BukuController extends Controller
{
    public function index()
    {
        // Retrieve all books from the database (or use other queries if needed)
        $buku = Buku::all(); 

        // Pass the $buku variable to the Blade view
        return view('buku', compact('buku'));
    }

     public function create()
    {
        return view('buku.create'); // Make sure to create this Blade view
    }

    // Store the new book in the database
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'IDBuku' => 'required|string|max:255',
            'Nama_Buku' => 'required|string|max:255',
            'Pengarang' => 'required|string|max:255',
            'Penerbit' => 'required|string|max:255',
            'Jumlah_Buku' => 'required|integer|max:100',
        ]);

        // Create a new book record in the database
        Buku::create([
            'IDBuku' => $request->IDBuku,
            'Nama_Buku' => $request->Nama_Buku,
            'Pengarang' => $request->Pengarang,
            'Penerbit' => $request->Penerbit,
            'Jumlah_Buku' => $request->Jumlah_Buku,
        ]);

        // Redirect back to the books page
        return redirect()->route('buku');
    }
}
