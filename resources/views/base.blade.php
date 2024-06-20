{{-- ressources/views/base.blade.php --}}
<html>
    <head>
        <title>@yield('titulo')</title>
    </head>
    <body>
        <marquee behavior="" direction=""><h1>@yield('titulo')</h1></marquee>
        <hr>
        @yield('conteudo')
    </body>
</html>