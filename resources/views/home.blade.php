<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Greenfuel - Security System</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    {{-- <link href="../../public/fonts/comic.ttf?family=comic:wght@400;600;700&display=swap" rel="stylesheet"> --}}

</head>

<body class="antialiased">
    <div id="app">        
        <app-component></app-component>
    </div>
</body>

</html>

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
{{-- <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet"> --}}

