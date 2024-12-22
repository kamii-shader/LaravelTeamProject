<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Feeding Hope')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mohave:wght@400;700&display=swap" rel="stylesheet">
    <style>
    body {
            font-family: 'Arial', sans-serif;
            font-family: 'Mohave', sans-serif;
        }
    .hero {
            position: relative;
            text-align: center;
            padding: 200px 40px;
            background: url('/images/Donation.png') no-repeat center center;
            background-size: cover;
            background-color: rgba(255, 255, 255, 0.8);
            background-blend-mode: overlay;
        }
    .hero h1 {
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 10px;
            z-index: 1;
            position: relative;
        }
    .hero p {
            font-size: 1.0rem;
            margin-bottom: 5px;
            z-index: 1;
            position: relative;
        }
    .btn1{
            display: inline-block;
            padding: 10px 20px;
            background-color: #d2e693;
            color: #3d3d3d;
            font-family: Arial, sans-serif;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            border-radius: 20px;
            border: none;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
            cursor: pointer;
        }
    .objectives {
            background: #fff;
            padding: 50px 20px;
        }
    .objectives .section-title{
        font-size: 2.5rem;
        margin-bottom: 5px;
        z-index: 1;
        position: relative;
        text-align: center;
        font-weight: bold;

    }
    .highlight {
        background: #D3EC8E;
        text-align: center;
        padding: 50px 20px;
    }
    .highlight h2 {
        font-size: 2.5rem;
        font-weight: bold;
        margin-bottom: 5px;
        z-index: 1;
        position: relative;
        color: red;
        text-transform: uppercase;
    }
    .highlight p {
        font-size: 1.5rem;
        font-weight: bold;
        margin-bottom: 5px;
        z-index: 1;
        position: relative;
        color: red;
        text-transform: uppercase;
    }
    .btn2{
            display: inline-block;
            padding: 10px 20px;
            background-color: #4D4D4D;
            color: #ffffff;
            font-family: Arial, sans-serif;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            border-radius: 20px;
            border: none;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
            cursor: pointer;
        }
    .cta {
        background: #fef6e4;
        text-align: center;
        padding: 50px 20px;
    }
    .cta h3{
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 10px;
            z-index: 1;
            position: relative;
    }
    .cta p{
            font-size: 0.9rem;
            font-weight: bold;
            margin-bottom: 10px;
            z-index: 1;
            position: relative;
    }
    .btn3{
            display: inline-block;
            padding: 10px 20px;
            background-color: #d2e693;
            color: #3d3d3d;
            font-family: Arial, sans-serif;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            border-radius: 20px;
            border: none;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
            cursor: pointer;
        }
    .cta1 {
        background: #fff;
        text-align: center;
        padding: 50px 20px;
    }
    .cta1 h3{
            font-size: 2.5rem;
            font-weight: bold;
            margin-bottom: 10px;
            z-index: 1;
            position: relative;
    }
    .cta1 p{
            font-size: 0.9rem;
            font-weight: bold;
            margin-bottom: 10px;
            z-index: 1;
            position: relative;
    }
    .btn4{
            display: inline-block;
            padding: 10px 20px;
            background-color: #d2e693;
            color: #3d3d3d;
            font-family: Arial, sans-serif;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            border-radius: 20px;
            border: none;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
            cursor: pointer;
        }
        .footer {
        background: #333;
        color: #fff;
        text-align: center;
        padding: 30px 20px;
    }
        .footer a {
        color: #ddd;
        text-decoration: none;
    }
        .footer a:hover {
            color: #fff;
    }
    </style>
</head>
<body>
    <!-- Include Navbar -->
    @guest
        @include('layouts.navbar') <!-- Menampilkan navbar jika belum login -->
    @else
        @include('layouts.navbarafter') <!-- Menampilkan navbar setelah login -->
    @endguest
    
    <!-- Content Section -->
    <div class="container mt-4">
        @yield('content')        
    </div>

    <br><br>
    <!-- Footer -->
    <footer class="footer">
        <p>&copy; 2024 Feeding Hope. All rights reserved.</p>
        <p>
            <a href="#">Privacy Policy</a> |
            <a href="#">Terms of Service</a>
        </p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    @yield('additional-scripts')
</body>
</html>
