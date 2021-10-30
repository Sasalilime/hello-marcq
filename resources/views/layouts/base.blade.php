<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>{{ isset($title) ? config('app.name') . ' | ' . $title : config('app.name') }}</title>

</head>

<body class="min-h-screen flex  flex-col items-center justify-between  test">

    <main role="main" class=" mx-5 flex-1 flex flex-col justify-center gap-y-12 items-center ">
        @yield('content')
        <button class="btn bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Bouton</button>
    </main>


    @include('layouts/partials/_footer')
    <script src={{ asset('js/app.js') }}></script>
</body>

</html>
