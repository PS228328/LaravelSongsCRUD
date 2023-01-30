<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Creer een song</title>
</head>
<style>
    *{
        padding-left: 20px;
    }
    h2{
        font-size: 30px;
        font-weight: bolder;
    }
    h3{
        font-size: 25px;
        font-family: "Apple Color Emoji";
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
        grid-template-columns: 30% 70%;
        padding-left: 5px;
    }
</style>
<body>
<h2>Hieronder kun je een song creeren:</h2>
<form action="/songs" method="post">
    @csrf
    <h4>Naam</h4>
    <input required name="title" type="text">
    <h4>Artiest</h4>
    <input required name="singer" type="text"><br>
    <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" type="submit">Maak aan</button>
</form><br>
<h3>..Of zoek er een op naam</h3>
<form action="/songs/create" method="GET">
    <input required name="title" type="text" style="grid-column-start: 1; grid-column-end: 3">
    <button type="submit" style="grid-column-start: 1; grid-column-end: 3; background-color: blue">Submit</button>
</form>
<table>
    <tr>
        <th>Titel</th>
        <th>Artiest</th>
        <th>Toevoegen?</th>
    </tr>
@foreach($songsFromAPI as $song)
    <tr>
        <form action="/songs" method="post">
            @csrf
            <td><p>{{$song['name']}}</p><input type="hidden" name="title" value="{{$song['name']}}"></td>
            <td><p>{{$song['artist']}}</p><input type="hidden" name="singer" value="{{$song['artist']}}"></td>
            <td><button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" type="submit">Voeg toe</button></td>
        </form>
    </tr>
@endforeach
</table>
<p></p>
</body>
</html>
