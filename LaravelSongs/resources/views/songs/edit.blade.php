<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Bewerk de song</title>
</head>
<style>
    *{
        padding-left: 20px;
    }
    h2{
        font-size: 30px;
        font-weight: bolder;
    }
    h4{
        font-size: 20px;
    }
    input{
        border: 2px solid black;
    }
    form{
        display: grid;
        width: 60%;
        grid-template-columns: 50% 50%;
        padding-left: 5px;
    }
    .albumlist{
        display: grid;
        width: 60%;
        grid-template-columns: 60% 40%;
        padding-left: 5px;
    }
</style>
<body>
<h2>Hieronder kun je de song bewerken</h2>
<form action="/songs/{{$song->id}}" method="post">
    @method('put')
    @csrf
    <h4>Naam</h4>
    <input maxlength="100" name="title" required maxlength="100" type="text" value="{{$song->title}}">
    <h4>Artiest</h4>
    <input name="singer" type="text" value="{{$song->singer}}"><br>
    <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" type="submit">Bewerk</button>
</form>
<h4 style="font-weight: bolder">Album koppelen?</h4>
@foreach($albums as $album)
    <form class="albumlist" action="/albums/{{$album->id}}/songs/{{$song->id}}" method="post">
        @csrf
        <p>{{$album->name}}</p>
        <button style="background-color: #2563eb; border: 2px solid black; margin: 2px" type="submit">Koppel</button>
    </form>
@endforeach
<h4 style="font-weight: bolder">Al gekoppeld</h4>
@foreach($song->albums as $album)
    <form class="albumlist" action="/albums/{{$album->id}}/songs/{{$song->id}}" method="post">
        @method('delete')
        @csrf
        <p>{{$album->name}}</p>
        <button style="background-color: red; border: 2px solid black; margin: 2px; height: 28px;" type="submit">Verwijder</button>
    </form>
@endforeach
</body>
</html>
