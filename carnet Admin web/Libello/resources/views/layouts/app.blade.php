<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>LIBELLO</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#">Accueil</a></li>
                <li><a href="#">Utilisateurs</a></li>
                <li><a href="#">Hôpitaux</a></li>
                <li><a href="#">Consultations</a></li>
            </ul>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>&copy; 2023 Mon Application/ Enzo. Tous droits réservés.</p>
    </footer>
</body>
</html>