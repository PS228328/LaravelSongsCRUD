<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Alle songs</title>
</head>
<style>
    h2{
        font-size: 50px;
        font-weight: bolder;
        margin-left: 15px;
    }
    table, tr, td
    {
        border: 2px solid blue;
        text-align: center;
        padding: 5px;
        margin-left: 15px;
    }
    th
    {
        border: 5px solid brown;
        padding-left: 30px;
        padding-right: 30px;
        background: gray;
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
    <a href="http://localhost:8000/songs" style="font-weight: bolder">Songs</a>
    <a href="http://localhost:8000/bands">Bands</a>
    <a href="http://localhost:8000/albums">Albums</a>
</nav><br>
@auth
<a class="bg-green-500 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded-full" href="/songs/create">Maak een song aan</a>
@endauth
<h2>Songlist:</h2>
<table>
    <tr>
        <th>Song</th>
        @auth
        <th>Delete</th>
        <th>Update</th>
        @endauth
    </tr>
@foreach ($songs as $song)
        <form action="/songs/{{$song->id}}" method="POST">
            @method('DELETE')
            @csrf
            <tr>
                <td><a href="/songs/{{$song->id}}">{{$song->title}}</a></td>
                @auth
                    <td><button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full" type="submit">Delete</button></td>
                    <td><a class="bg-blue-500 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded-full" href="/songs/{{$song->id}}/edit">Update</a></td>
                @endauth
            </tr>
        </form>
@endforeach
</table>
@auth
@endauth
</body>
</html>
