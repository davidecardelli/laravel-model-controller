<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Model Control</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <header class="bg-black text-center py-3 mb-5">
        <h1 class="text-white">Movies</h1>
    </header>


    <main>
        <div class="container">
            <div class="row row-cols-4">
                @foreach ($movies as $movie)
                    <div class="col">
                        <div class="card text-center mb-5">
                            <img class="img-fluid" src="{{ $movie['poster'] }}" alt="{{ $movie['title'] }}"
                                style="height: 25rem">
                            <div class="card-body">
                                <h6 class="card-title mb-3">{{ $movie['title'] }}</h6>
                                <h6 class="card-title mb-3">{{ $movie['original_title'] }}</h6>
                                <p class="card-text mb-3">{{ $movie['nationality'] }}</p>
                                <p class="card-text mb-3">{{ $movie['date'] }}</p>
                                <p class="card-text mb-3">{{ $movie['vote'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>

</body>

</html>
