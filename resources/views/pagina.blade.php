<html>
    <head>
        <link href="{{ URL::to('css/app.css') }}" rel="stylesheet">

    </head>

    <body>

        @alerta(['tipo'=>'danger', 'titulo'=>'Erro fatal'])
            <strong>Erro: </strong> Sua mensagem de erro.
        @endalerta

        @alerta(['tipo'=>'warning', 'titulo'=>'Erro fatal'])
            <strong>Erro: </strong> Sua mensagem de erro.
        @endalerta

        @alerta(['tipo'=>'success', 'titulo'=>'Erro fatal'])
            <strong>Erro: </strong> Sua mensagem de erro.
        @endalerta

        @alerta(['tipo'=>'primary', 'titulo'=>'Erro fatal'])
            <strong>Erro: </strong> Sua mensagem de erro.
        @endalerta

        @alerta(['tipo'=>'secondary', 'titulo'=>'Erro fatal'])
            <strong>Erro: </strong> Sua mensagem de erro.
        @endalerta

        @alerta(['tipo'=>'info', 'titulo'=>'Erro fatal'])
            <strong>Erro: </strong> Sua mensagem de erro.
        @endalerta

        @alerta(['tipo'=>'dark', 'titulo'=>'Erro fatal'])
            <strong>Erro: </strong> Sua mensagem de erro.
        @endalerta

        <script src="{{ URL::to('js/app.js') }}" type="text/javascript"></script>

    </body>

</html>