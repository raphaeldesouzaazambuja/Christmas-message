<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @yield('style')

    <link rel="stylesheet" href="{{ asset('style/layout/layout.css')}}">
    <title>Christmas Message</title>
</head>
<body>
    <main>
        <img class="mery-christmas" src="{{ asset('img/merychristmas.png') }}" alt="<h1>Mery Christmas</h1>" draggable="false">

        @yield('content')
    </main>
</body>
</html>

<script src="{{ asset("snowstorm.js") }}"></script>
