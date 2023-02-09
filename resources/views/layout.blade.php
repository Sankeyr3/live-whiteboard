<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <h1>Live Whiteboard</h1>
    </header>
    <main>
    @include('partials.navbar')
    @yield('content')
    </main>
    @include('partials.footer')
</body>
</html>