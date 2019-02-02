<html>
    <head>
        <link href="{{ URL::to('css/app.css') }}" rel="stylesheet">

    </head>

    <body>

        @component('components.meucomponente')
            <strong>Erro: </strong> Sua mensagem de erro.
        @endcomponent

        <script src="{{ URL::to('js/app.js') }}" type="text/javascript"></script>

    </body>

</html>