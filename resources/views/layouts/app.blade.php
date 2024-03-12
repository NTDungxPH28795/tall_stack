<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <link rel="icon" type="image/svg+xml" href="/vite.svg" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        {{-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> --}}
        {{-- <link rel="stylesheet" href="{{asset('css/style.css')}}"> --}}
        <title>{{ $title ?? "Tall Stack"}}</title>
        @vite('resources/css/app.css')
    </head>
    <body>
        @include('layouts.header-home')
        {{$slot}}
        @include('layouts.footer')
    </body>
</html>