<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Management App</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }
        .navbar {
            background-color: #3b8bba;
            padding: 10px;
            color: white;
            text-align: center;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
        }
        .footer {
            background-color: #3b8bba;
            padding: 10px;
            text-align: center;
            color: white;
        }
        .container {
            padding: 20px;
        }
        .content {
            display: flex;
            justify-content: space-around;
        }
        .card {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin: 10px;
            padding: 15px;
            width: 20%;
        }
        .card img {
            width: 100%;
            border-radius: 5px;
        }
        .card-title {
            font-weight: bold;
            margin-top: 10px;
        }
        .card-details {
            margin-top: 5px;
            font-size: 0.9em;
        }
        .navbar, .footer {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <div class="navbar">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('buku') }}">Buku</a>
        <a href="{{ route('pinjam') }}">Pinjam</a>
        <a href="{{ route('signup') }}">Signup</a>
    </div>

    <!-- Main Content -->
    <div class="container">
        @yield('content')
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>&copy; 2025 Library Management System</p>
    </div>

</body>
</html>
