<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Gates</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css')}}">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png')}}" type="image/png">
</head>

<body>

    <div class="container mt-3">
        <p class="display-6">Laravel Gates</p>
        <hr>

        @auth
            <p><span class="text-info me-3">{{ Auth::user()->username }}</span><a href="#"></a></p>
        @else
            <p class="opacity-75">Nenhum usuário logado</p>
        @endauth

    </div>

    {{ $slot }}

<script src="{{ asset('assets/bootstrap/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('assets/js/main.js')}}"></script>
</body>

</html>
