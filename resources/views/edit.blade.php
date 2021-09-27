<!doctype html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Musics</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
    <h1 class="title">編集画面</h1>
    <div class="content">
        <form action="/musics/{{ $music->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class='content__title'>
                <h2>アーティスト</h2>
                <input type='text' name='music[artist]' value="{{ $music->artist }}">
            </div>
            <div class='content__body'>
                <h2>曲名</h2>
                <input type='text' name='music[title]' value="{{ $music->title }}">
                <h3>本文</h3>
                <textarea name='music[body]'>{{ $music->body }}</textarea>
            </div>
            <input type="submit" value="保存">
        </form>
    </div>
</body>
</html>