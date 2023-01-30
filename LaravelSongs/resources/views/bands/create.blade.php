<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Creer een band</title>
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
        grid-template-columns: 30% 70%;
        padding-left: 5px;
    }
</style>
<body>
<h2>Hieronder kun je een band creeren:</h2>
<form action="/bands" method="post">

    @csrf
    <h4>Naam</h4>
    <input name="name" type="text" max="50" required>
    <h4>Genre</h4>
    <input name="genre" type="text" max="30" required>
    <h4>Opgericht</h4>
    <input name="founded" type="number" min="1000" max="9999" required>
    <h4>Actief tot?</h4>
    <input name="active_till" type="text" max="20" required><br><br>
    <button class="bg-purple-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" type="submit">Maak aan</button>
</form>
</body>
</html>
