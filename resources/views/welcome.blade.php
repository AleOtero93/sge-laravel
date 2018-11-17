<html>
    <head>
        <title>
            Clientes
        </title>
    </head>
    <body>
        @foreach ($clientes as $cliente)
            <p>This is cliente {{ $cliente->nombre }}</p>
        @endforeach
    </body>
</html>