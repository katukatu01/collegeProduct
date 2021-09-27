<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Music App</h1>
        
        [<a href='/musics/create'>create</a>]
        
        <div class='musics'>
            @foreach ($musics as $music)
                <div class='music'>
                    <h2 class='artist'>{{ $music->artist }}</h2>
                    <h3><a href="/musics/{{ $music->id }}">{{ $music->title }}</a></h3>
                    <p class='body'>{{ $music->body }}</p>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $musics->links() }}
        </div>
    </body>
</html>