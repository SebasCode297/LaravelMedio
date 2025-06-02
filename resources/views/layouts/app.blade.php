<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <title>@yield('title' , 'Animales')</title>
    
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
    <div class="container justify-content-center">
        <a class="navbar-brand mx-auto" href="#">
            <img src="https://i.pinimg.com/564x/a0/3c/9c/a03c9c0cf64ed8563fefd8ac22c4b024.jpg" alt="Logo" style="width: 200px;">
        </a>
    </div>
</nav>

    <main class="container">
        @yield('content')

    </main>
</body>
</html>