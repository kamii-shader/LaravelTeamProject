<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Backend</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">ECO-Logikal</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      
          <div class="collapse navbar-collapse" id="navbarContent">
            <!-- Menu Navigasi di Tengah -->
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/about">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/works">Community</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/campaign">Our Campaign</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/donation">Donation</a>
              </li>
            </ul>
      
            <a class="nav-link" href="/profile" style="margin-right: 16px;">{{ auth()->user()->name }}</a>
            <img src="{{ asset('avatars/' . auth()->user()->avatar) }}" alt="Profile Picture" class="rounded-circle" style="width: 30px; height: 30px; object-fit: cover; margin-right: 8px;">
          </div>
        </div>
      </nav>
    
      <style>
        .navbar .nav-link,
        .navbar .navbar-brand {
          color: #fff;
        }
      
        .navbar .nav-link:hover {
          color: #0056b3;
        }
      </style>
      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>