<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <style>
        body{
            background-color: #3e4142;
        }
    </style>
    <title>GITS | ALI</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm" >
        <div class="container">
            <a class="navbar-brand" style="color: #ffffff;">Halaman Pribadi</a>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" style="color: #ffffff;" href="/profil">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: #ffffff;" href="/kampus">Kampus</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" style="color: #ffffff;" href="/">Home</a>
                </li>
            </ul>
          </div>
        </div>
    </nav>
    
    @yield('content')
</body>
</html>