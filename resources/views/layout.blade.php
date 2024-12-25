<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=DynaPuff:wght@400;700" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body>

    @include('partials.header')

    @yield('content') {{--He optado por mantener la etiqueta main fuera de la plantilla por tema de estilos (resulta mas sencillo usar anchos distintos)--}}

    @include('partials.footer')

</body>
</html>
