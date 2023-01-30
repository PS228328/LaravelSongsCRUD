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
        padding-left: 10px;
    }
    h2{
        font-size: 30px;
        font-weight: bolder;
    }
    p{
        font-family: "Blackadder ITC";
        font-size: 35px;
    }
</style>
<body>
<h2>De gekozen band is:</h2>
<p>{{$band->name}} met genre {{$band->genre}}</p>
</body>
</html>
