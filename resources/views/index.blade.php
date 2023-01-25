<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/js/app.js')
    <title>Document</title>
    
</head>
<body class="bg-dark">
    <div class="container text-center">
        <h1 class="text-white mb-5">Film</h1>
        <div class="row row-cols-4 g-3">
            @foreach ( $movies as $movie)
                
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{$movie->title}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">genere: {{$movie->genere}}</h6>
                         {{--    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                            <h3 class="card-text">anno di uscita: {{$movie->anno_uscita}}</h3>
                            <h3 class="card-text">creato il :{{$movie->created_at}}</h3>
                        </div>
                    </div>    
                </div>

            @endforeach
        </div>
    </div>
</body>
</html>