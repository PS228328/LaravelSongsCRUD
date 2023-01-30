<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Laat een album zien</title>
</head>
<style>
    h2{
        font-size: 40px;
    }
    p{
        font-family: "Kunstler Script";
        font-size: 50px;
        font-weight: bold;
    }
</style>
<body>
<h2>Het gekozen album is</h2>
<p>{{$album->name}}</p>
<h2>Is het album gekoppeld aan een band?</h2>
@if ($album->band_id != NULL)
    <p>Ja, aan {{$band->name}}</p>
@else
    <p>Nee</p>
@endif
<h2>Liedjes:</h2>
<ol>
@foreach($albumsongs as $albumsong)
    <li>{{$albumsong}}</li>
@endforeach
</ol>
</body>
</html>
