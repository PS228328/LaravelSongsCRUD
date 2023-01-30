<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Album bewerken</title>
</head>
<style>
    *{
        padding-left: 30px;
    }
    h2{
        font-size: 35px;
        font-weight: bolder;
    }
    h4{
        font-size: 20px;
        font-weight: bold;
    }
    input{
        font-size: 20px;
        border: 5px solid brown;
    }
    form{
        display: grid;
        width: 40%;
        grid-template-columns: 70% 30%;
        padding-left: 5px;
    }
    .songlist{
        display: grid;
        width: 50%;
        grid-template-columns: 30% 30% 40%;
        padding-left: 5px;
    }
    form>input
    {
        width: 400px;
    }
</style>
<body>
<h2>Hieronder kun je een album bewerken</h2>
<form action="/albums/{{$album->id}}" method="post">
    @method('put')
    @csrf
    <h4>Naam</h4>
    <input name="name" type="text" max="50" value="{{$album->name}}" required>
    <h4>Jaar van uitgave</h4>
    <input name="year" type="number" min="1000" max="9999" value="{{$album->year}}" required>
    <h4>Gekocht</h4>
    <input name="times_sold" type="number" min="0" value="{{$album->times_sold}}" required><br>
    <button class="bg-blue-300 hover:bg-green-400 text-white font-bold py-2 px-4 border-b-4 border-green-700 hover:border-blue-400 rounded" type="submit">Bewerk</button>
</form>
<h4>Wil je wat songs toevoegen aan het album?</h4>
@foreach($songs as $song)
    <form class="songlist" action="/albums/{{$album->id}}/songs/{{$song->id}}" method="post">
        @csrf
        <p>{{$song->singer}}</p>
        <p>{{$song->title}}</p>
        <button style="background-color: #2563eb; border: 2px solid black; margin: 2px" type="submit">Toevoegen</button>
    </form>
@endforeach
<h4>Al gekoppeld</h4>
@foreach($album->songs as $song)
    <form class="songlist" action="/albums/{{$album->id}}/songs/{{$song->id}}" method="post">
        @method('delete')
        @csrf
        <p>{{$song->singer}}</p>
        <p>{{$song->title}}</p>
        <button style="background-color: red; border: 2px solid black; margin: 2px; height: 28px;" type="submit">Verwijder</button>
    </form>
@endforeach
</body>
</html>
