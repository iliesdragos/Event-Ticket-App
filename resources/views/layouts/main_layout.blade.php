<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Aplicația Mea</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> <!-- Presupunând că ai un fișier CSS -->
    @stack('styles') <!-- Pentru a adăuga stiluri specifice paginii -->
</head>
<body>
<header>
    <!-- Aici poți include un antet comun, cum ar fi un meniu de navigare -->
</header>

<main>
    @yield('content') <!-- Secțiunea principală pentru conținutul paginii -->
</main>

<footer>
    <!-- Aici poți include un subsol comun -->
</footer>

<script src="{{ asset('js/app.js') }}"></script> <!-- Presupunând că ai un fișier JavaScript -->
@stack('scripts') <!-- Pentru a adăuga scripturi specifice paginii -->
</body>
</html>
