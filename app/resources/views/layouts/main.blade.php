<!DOCTYPE html>
<html lang="ru_RU">
    <head>

        <meta charset="utf-8">
        <title> @yield('title', env('APP_NAME')) </title>
        <link rel="stylesheet" href="{{ asset('bootstrap-5/bootstrap.min.css') }}"/>
        <script src="{{ asset('bootstrap-5/bootstrap.bundle.min.js') }}"></script>

    </head>
    <body class="container">
        @yield('content')
    </body>
</html>

