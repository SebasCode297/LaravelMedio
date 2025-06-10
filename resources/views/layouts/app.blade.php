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
    <nav class="navbar navbar-expand-lg py-3" style="background: linear-gradient(90deg, #28a745, #218838); box-shadow: 0 4px 6px rgba(0,0,0,0.1);">
  <div class="container d-flex justify-content-between align-items-center">
    <a class="navbar-brand d-flex align-items-center text-white" href="#" style="text-decoration: none;">
      <img src="https://learnlibre.com/wp-content/uploads/2024/03/50-Fun-Facts-About-Animals.webp"
           alt="Logo"
           width="50"
           height="50"
           class="rounded-circle shadow-sm me-3 border border-light">
      <span class="fw-bold fs-3" style="transition: color 0.3s;">Gestión de Animales</span>
    </a>
  </div>
</nav>

    <main class="container">
        @yield('content')<!-- Para llamar a otros archivos -->
    </main>
</body>
</html>