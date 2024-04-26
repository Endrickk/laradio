<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }} :: @yield('titulo') </title>
</head>
<body>

    <div class="logo">

    </div>

    <div class="container">
        @yield('conteudo')
    </div>
    <footer>
        <p>BreakSoftware - 2024</p>
    </footer>
</body>
</html>
