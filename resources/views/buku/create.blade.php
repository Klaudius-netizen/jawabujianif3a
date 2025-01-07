<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Book</title>
    <!-- External Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 50%;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }

        .form-input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
            margin-top: 5px;
        }

        .form-input:focus {
            outline-color: #3b8bba;
            border-color: #3b8bba;
        }

        .submit-btn {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #3b8bba;
            color: white;
            font-weight: bold;
            font-size: 1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .submit-btn:hover {
            background-color: #2b6f9e;
        }

        .error {
            color: red;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

    <!-- Main Form -->
    <div class="container">
        <h2>Penambahan Buku</h2>

        <form action="{{ route('buku.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="IDBuku">ID Buku</label>
                <input type="text" name="IDBuku" id="IDBuku" class="form-input" value="{{ old('IDBuku') }}" required>
                @error('IDBuku')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="Nama_Buku">Nama Buku</label>
                <input type="text" name="Nama_Buku" id="Nama_Buku" class="form-input" value="{{ old('Nama_Buku') }}" required>
                @error('Nama_Buku')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="Pengarang">Pengarang</label>
                <input type="text" name="Pengarang" id="Pengarang" class="form-input" value="{{ old('Pengarang') }}" required>
                @error('Pengarang')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="Penerbit">Penerbit</label>
                <input type="text" name="Penerbit" id="Penerbit" class="form-input" value="{{ old('Penerbit') }}" required>
                @error('Penerbit')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="Jumlah_Buku">Jumlah Buku</label>
                <input type="number" name="Jumlah_Buku" id="Jumlah_Buku" class="form-input" value="{{ old('Jumlah_Buku') }}" required>
                @error('Jumlah_Buku')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <button type="submit" class="submit-btn">Tambahkan</button>
            </div>
        </form>
    </div>

</body>
</html>
