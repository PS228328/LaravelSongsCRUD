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
        width: 60%;
        grid-template-columns: 30% 70%;
        padding-left: 5px;
    }
</style>
<body>
<h2>Hieronder kun je een album creeren:</h2>
<form action="/albums" method="post">

    @csrf
    <h4>Naam</h4>
    <input style="width: 500px;" name="name" type="text" max="50" required>
    <h4>Jaar van uitgave</h4>
    <input name="year" type="number" min="1000" max="9999" required>
    <h4>Gekocht</h4>
    <input name="times_sold" type="number" min="0" required><br><br>
    <button class="bg-green-500 hover:bg-green-400 text-white font-bold py-2 px-4 border-b-4 border-green-700 hover:border-green-500 rounded" type="submit">Maak aan</button>
</form>
</body>
<html>
