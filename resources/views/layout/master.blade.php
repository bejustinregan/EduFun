<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('title')
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <style>

        .nav-link{
            color: black;
            transition: all 0.3s ease;
        }

        .nav-link:hover{
            color: blue;
            text-decoration: underline;
        }

        .background-custom{
            background-color: beige;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        {{-- navbar --}}
    @include('layout.navbar')

    <div class="background-custom">
        {{-- content --}}
        @yield('content')
    </div>

    @include('layout.footer')
    </div>

</body>
</html>
