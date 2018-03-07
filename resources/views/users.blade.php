<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{$titulo}}</title>

    </head>
    <body>
        <p>Mostrando detalles del usuario: {{$id}}</p>
        <?php
            var_dump($usuarios);
        ?>
    </body>
</html>
