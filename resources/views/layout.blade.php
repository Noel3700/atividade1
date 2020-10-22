<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>@yield('titulo')</title>
    </head>
    <body>
        <h1 style="color:red">@yield('header')</h1>
        @yield('conteudo')
        <div class="menu-rodape">
            <h2>Opções de navegação</h2>
            <a href="{{route('equipas.listarequipas)}}">Inicio</a>
            <a href="{{route('equipas.listarequipas)}}">ver equipas</a>
        </div>
    </body>

</html>