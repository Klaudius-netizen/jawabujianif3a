<!-- resources/views/signup.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Pinjam Buku</h2>

        <!-- Form to register new member -->
        <form action="{{ route('pinjam.store') }}" method="POST">
            @csrf <!-- CSRF Token for security -->

            <!-- ID Anggota -->
            <div class="form-group">
                <label for="IDAnggota">ID Anggota</label>
                <input type="text" class="form-control" id="IDAnggota" name="IDAnggota" required>
            </div>

            <!-- Nama Anggota -->
            <div class="form-group">
                <label for="Nama_Anggota">ID Buku</label>
                <input type="text" class="form-control" id="Nama_Anggota" name="Nama_Anggota" required>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Ajukan Pinjaman</button>
        </form>
    </div>
@endsection
