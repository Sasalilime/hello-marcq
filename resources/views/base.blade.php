<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <title>@yield('title', config('app.name'))</title>

</head>

<body class="min-h-screen flex  flex-col items-center justify-between  ">
    <main role="main" class="mx-5 flex-1 flex flex-col justify-center gap-y-12 items-center">
        @yield('content')
    </main>


    <footer>
        <p class="text-gray-400">&copy; Copyright {{ date('Y') }}
            @if (!Route::is('about'))
                <a class="text-indigo-500 hover:text-indigo-600 underline" href="/about">&middot; A propos de nous</a>
            @endif

        </p>
    </footer>

</body>

</html>
