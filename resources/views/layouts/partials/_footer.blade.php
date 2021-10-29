<footer>
    <p class="text-gray-400">&copy; Copyright {{ date('Y') }}
        @if (!Route::is('about'))
            <a class="text-indigo-500 hover:text-indigo-600 underline" href="/about">&middot; A propos de nous</a>
        @endif

    </p>
</footer>
