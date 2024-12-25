<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/styles.css">
    <link href="https://fonts.googleapis.com/css2?family=DynaPuff:wght@400;700&display=swap" rel="stylesheet">
    <title>Characters</title>
</head>

<body>
    <h1>Película {{ $id }}</h1>
    <div class="characters">
        @foreach ($characters as $character)
            <div>
                {{-- NOTA PARA MI: En caso de que no haya foto en la BD puedo sacar una de la API de wikipedia --}}
                {{-- "https://en.wikipedia.org/w/api.php?action=query&titles=Mark_Hamill&prop=pageimages&format=json&pithumbsize=200"--}}
                <p><b>Personaje:</b> {{ $character['character_name'] }}</p>
                <p><b>Actor/Actriz:</b> {{ $character['person_name'] }}</p>
                <p><b>Sexo:</b> {{ $character['gender'] }}</p>
                <p><a href="https://en.wikipedia.org/wiki/{{ str_replace('+', '_', urlencode($character['person_name'])) }}" target="_blank">+ INFO</a></p>
            </div>
        @endforeach

    </div>
</body>

</html>
