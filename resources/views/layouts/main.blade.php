<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config("app.name") }}</title>
    <link rel="stylesheet" href="{{ asset('fa/fa/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('bs/bs/css/bootstrap.min.css') }}">
</head>
<body>
    <div class="container">
        <h1 class="my-5">
            <i class="fas fa-users"></i>Employees
        </h1>
        @yield('content')
    </div>
    @stack('modal')
    <script src="{{ asset('js/jquery.slim.min.js') }}"></script>
    <script src="{{ asset('bs/bs/js/bootstrap.min.js') }}"></script>
    @stack('js')
</body>
</html>