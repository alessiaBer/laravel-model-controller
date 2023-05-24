<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <div class="container">

        <h1>My MovieDB</h1>

        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-5">
            @foreach($movies as $movie)
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h6>{{$movie->title}}</h6>
                        <p>{{$movie->original_title}}</p>
                        <span class="d-block">Nationality: {{$movie->nationality}}</span>
                        <span class="d-block">Vote: {{$movie->vote}}</span>
                        <span class="d-block">Date: {{$movie->date}}</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</body>

</html>