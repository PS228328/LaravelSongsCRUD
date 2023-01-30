<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Albums</title>
</head>
<style>
    h2{
        margin-left: 15px;
    }
    table{
        border: 5px solid black;
        text-align: center;
        margin-left: 15px;
    }
    .title
    {
        font-size: 25px;
    }
    .update
    {
        background-color: lightblue;
        font-weight: bold;
        padding: 8px;
        max-width: 100px;
    }
    .delete
    {
        background-color: indianred;
        font-weight: bold;
        padding: 8px;
        max-width: 100px;
    }
    nav{
        display: flex;
        font-size: 30px;
    }
    nav>a{
        padding: 3px;
        padding-left: 20px;
        padding-right: 20px;
        border: 3px solid black;
    }
</style>
<body>
<div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
    @auth
        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
    @else
        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

        @if (Route::has('register'))
            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
        @endif
    @endauth
</div>
<nav>
    <a href="http://localhost:8000/songs">Songs</a>
    <a href="http://localhost:8000/bands">Bands</a>
    <a href="http://localhost:8000/albums" style="font-weight: bolder">Albums</a>
</nav><br>
@auth
    <a class="bg-green-500 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded-full" href="/albums/create">Maak een album aan</a>
@endauth
<h2 style="font-family: font-sans; font-size: 30px; font-weight: bold">Albumlist:</h2>
<table>
    <tr class="title">
        <th style="width: 350px; border: 2px solid black; background-color: lightgrey">Album</th>
        <th style="width: 250px; border: 2px solid black; background-color: lightgrey">Uitgekomen in</th>
        @auth
        <th style="width: 100px; border: 2px solid black; background-color: red">Delete</th>
        <th style="width: 100px; border: 2px solid black; background-color: blue">Update</th>
        @endauth
    </tr>
    @foreach ($albums as $album)
    <form action="/albums/{{$album->id}}" method="POST">
        @method('DELETE')
        @csrf
        <tr>
            <td style="border: 2px solid black;"><a href="/albums/{{$album->id}}">{{$album->name}}</a></td>
            <td style="border: 2px solid black;"><p style="font-size: 30px; font-weight: bold;">{{$album->year}}</p></td>
            @auth
            <td class="tdDelete" style="border: 2px solid black;"><button class="delete" type="submit">Delete</button></td>
            <td class="tdUpdate" style="border: 2px solid black;"><a class="update" href="/albums/{{$album->id}}/edit">Update</a></td>
            @endauth
        </tr>
    </form>
    @endforeach
</table>
</body>
</html>
