<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Accueil | Hello City</title>

</head>

<body>
    <h1>Hello from France</h1>
    <p>La date et l'heure actuelles sont : {{ strftime('%A %e %B %H:%M') }}</p>


    <footer>
        <p>&copy; Copyright {{ date('Y') }} &middot; <a href="/about">A propos de nous</a></p>
    </footer>

</body>

</html>
