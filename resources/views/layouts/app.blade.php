<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <link rel="icon" type="image/svg+xml" href="/vite.svg" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>{{ $title ?? "Tall Stack"}}</title>
        @vite('resources/css/app.css')
    </head>
    <body>
        @include('layouts.header-home')
        {{$slot}}
        @include('layouts.footer')
    </body>
</html>