<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo list</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>
<body style="background-color: #ffd9b3">
    @include('inc.navbar')
    @include('inc.messages')
    <div class="container">
        @yield('content')
    </div>
    <div class="card-footer mt-3">
        <footer class="text-center">
            Copyright &copy;2021 - <a href="https://wa.me/+254702310628">Alex</a>
        </footer>
    </div>
    <script src="{{ asset('/js/app.js') }}"></script>
</body>
</html>