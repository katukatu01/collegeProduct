<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Music</title>
    </head>
    <body>
        <h1>Music Name</h1>
        <form action="/musics" method="POST">
            @csrf
            <div class="title">
                <h2>Artist</h2>
                <input type="text" name="music[artist]" placeholder="アーティスト"/ value="{{ old('music.artist') }}">
                <p class="artist_error" style="color:red">{{ $errors->first('music.artist') }}</p>
            </div>
            <div class="body">
                <h2>title</h2>
                <input type="text" name="music[title]" placeholder="曲名">{{ old('music.title') }}</textarea>
                <p class='title_error' style="color:red">{{ $errors->first('music.title') }}</p>
                <h3>body</h3>
                <textarea name="music[body]" placeholder="最高です">{{ old('music.body') }}</textarea>
                <p class="body_error" style="color:red">{{ $errors->first('music.body') }}</p>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>