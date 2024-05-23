<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>
<body>
   
        <ul class="_row">
            @foreach ($movies as $movie)
                    <li class="_col-4">
                        <div class="_card text-center">
                            <p>
                                {{$movie->title}}
    
                            </p>
                            <p>
                                {{$movie->original_title}}
    
                            </p>
                            <p>
                                {{$movie->nationality}}
    
                            </p>
                            <p>
                                {{$movie->date}}
    
                            </p>
                            <p>
                                {{$movie->vote}}
    
                            </p>

                        </div>

                    </li>
            @endforeach

        </ul>
    
</body>
</html>
