<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Laravel</title>
    <style>
        body {
            font-family: 'Lato', arial, helvetica, sans-serif;
        }

        .title {
            font-size: 3em;
            text-align: center;
            margin: 20px;
            padding: 10px;
            color: #333;
            font-weight: bold;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 50px;
        }

    </style>
</head>


<body>
    <h1 class="title">EQUIPOS DE E-SPORTS</h1>
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <a href="{{ route('equipos.index') }}" class="btn btn-outline-dark btn-lg">EQUIPOS</a>
            </div>
            <div class="col">
                <a href="{{ route('juegos.index') }}" class="btn btn-outline-dark btn-lg">JUEGOS</a>
            </div>
        </div>
    </div>
</body>

</html>
