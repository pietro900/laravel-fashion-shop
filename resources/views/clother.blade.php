<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        @foreach ($lista_vestiti as $vestito)
            <p>{{ $vestito->name}}</p>
            <p>{{ $vestito->size}}</p>
            <p>{{ $vestito->color}}</p>
        @endforeach

    </body>
</html>
