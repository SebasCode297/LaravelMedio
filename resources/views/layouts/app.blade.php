<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>@yield('title','Animales')</title>
</head>
<body>
 

    <main class="container">
        @yield('content')<!-- Para llamar a otros archivos -->
    </main>
</body>
</html>