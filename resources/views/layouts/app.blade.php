<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
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
    </style>

</head>

<body>
    <div class="container">
        @yield('content')
    </div>
</body>

</html>
