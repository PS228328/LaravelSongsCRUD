<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Creer een album</title>
</head>
<style>
    h2{
        font-size: 50px;
        font-weight: bold;
        color: #1d2124;
        margin-left: 15px;
    }
    table, tr, td
    {
        border: 2px solid brown;
        text-align: center;
        margin-left: 15px;
    }
    th
    {
        border: 5px solid brown;
        padding-left: 30px;
        padding-right: 30px;
        background: gray;
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
    <a href="http://localhost:8000/bands" style="font-weight: bolder">Bands</a>
    <a href="http://localhost:8000/albums">Albums</a>
</nav><br>
@auth
    <a class="bg-green-500 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded-full" href="/bands/create">Maak een band aan</a>
@endauth
<h2>Bandlijst</h2>
<table>
    <tr>
        <th>Band</th>
        <th>Genre</th>
        <th>Opgericht</th>
        <th>Tot</th>
        @auth
        <th>Delete</th>
        <th>Update</th>
        @endauth
    </tr>
@foreach ($bands as $band)
        <form action="/bands/{{$band->id}}" method="POST">
            @method('DELETE')
            @csrf
            <tr>
                <td><a href="/bands/{{$band->id}}">{{$band->name}}</a></td>
                <td><p>{{$band->genre}}</p></td>
                <td><p>{{$band->founded}}</p></td>
                <td><p>{{$band->active_till}}</p></td>
                @auth
                <td class="delete"><button type="submit">Delete</button></td>
                <td class="update"><a href="/bands/{{$band->id}}/edit">Update</a></td>
                @endauth
            </tr>
        </form>
@endforeach
</table>
</body>
</html>
