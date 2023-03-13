<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Migration Seeder</title>

        {{-- Includiamo gli assets con la direttiva @vite --}}
        @vite('resources/js/app.js')
    </head>
    <body>
        <main>
            <ul>
                @foreach ($trains as $train)
                    <li>{{ $train }}</li>
                @endforeach
            </ul>
        </main>
    </body>
</html>
