@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="search-bar">
            <input type="text" placeholder="Search for books, authors, or categories..." class="search-input">
        </div>
    </div>

    <div class="content">
        <div class="card">
            <img src="https://via.placeholder.com/150" alt="Book Cover">
            <div class="card-title">The Great Gatsby</div>
            <div class="card-details">Author: F. Scott Fitzgerald</div>
        </div>

        <div class="card">
            <img src="https://via.placeholder.com/150" alt="Book Cover">
            <div class="card-title">To Kill a Mockingbird</div>
            <div class="card-details">Author: Harper Lee</div>
        </div>

        <div class="card">
            <img src="https://via.placeholder.com/150" alt="Book Cover">
            <div class="card-title">1984</div>
            <div class="card-details">Author: George Orwell</div>
        </div>
    </div>
@endsection
