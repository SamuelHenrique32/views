<html>
    <head>
        <title>Meu título - @yield('titulo')</title>
    </head>
    <body>
        <!-- secao compartilhada entre pai e filho -->
        @section('barralateral')
            <p>Esta parte da seção e do template PAI</p>
        @show
        <div>
            @yield('conteudo')
        </div>
    </body>
</html>