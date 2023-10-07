<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Login Sin Paquetes')</title>

    <link rel="stylesheet" href="{{ asset('storage/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/assets/css/app.css') }}">


</head>

<body class="antialiased">

    <header>
        <div class="card m-1">
            <div class="card-body">
                @include('layouts.partials.nav')
            </div>
        </div>
        <h1 class="text-center text-primary">@yield('h1', 'Login Sin Paquetes')</h1>

    </header>

    <div class="card m-1 p-1">
        <div class="card-body">

            @yield('content')
        </div>
    </div>
    <footer class="footer">

        @include('layouts.partials.footer')
    </footer>

</body>

</html>
