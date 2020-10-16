<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') - Musée archi-usée</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="@yield('css')">

</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/liste">Liste</a></li>
                <li><a href="/ajouter">Ajouter une statuette</a></li>
            </ul>
        </nav>
        <div>
            <h1>Le musée archi-usée</h1>
            <p>"La lune est le soleil de statues." - Jean Cocteau</p>
        </div>
    </header>
    <main class="container">
        @yield('content')
    </main>
    <footer>
        <p>2020 © PG</p>
    </footer>
</body>
</html>