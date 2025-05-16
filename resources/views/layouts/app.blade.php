<!DOCTYPE html>
<html>
<head>
    <title>@yield('titulo', 'minha aplicaçao')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}.css">
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>