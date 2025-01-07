<!-- resources/views/signup.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Sign Up</h2>

        <!-- Form to register new member -->
        <form action="{{ route('register.anggota') }}" method="POST">
            @csrf <!-- CSRF Token for security -->

            <!-- ID Anggota -->
            <div class="form-group">
                <label for="IDAnggota">ID Anggota</label>
                <input type="text" class="form-control" id="IDAnggota" name="IDAnggota" required>
            </div>

            <!-- Nama Anggota -->
            <div class="form-group">
                <label for="Nama_Anggota">Nama Anggota</label>
                <input type="text" class="form-control" id="Nama_Anggota" name="Nama_Anggota" required>
            </div>

            <!-- Alamat -->
            <div class="form-group">
                <label for="Alamat">Alamat</label>
                <input type="text" class="form-control" id="Alamat" name="Alamat" required>
            </div>

            <!-- Jurusan -->
            <div class="form-group">
                <label for="Jurusan">Jurusan</label>
                <input type="text" class="form-control" id="Jurusan" name="Jurusan" required>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Sign Up</button>
        </form>
    </div>
@endsection
