<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>@yield('titulo')</title>
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/all.css')}}">
    </head>
    <body>
        <h1 style="color:red">@yield('header')</h1>
        @yield('conteudo')
        <div class="menu-rodape">
            
            <h2>Opções de navegação</h2>
            <a href="{{route('equipas.listarequipas')}}"><i class="fas fa-drumstick-bite"></i>Inicio</a>
            <a href="{{route('equipas.listarequipas')}}">ver equipas</a>
        </div>
        
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/all.js')}}"></script>
    </body>

</html>