<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Een song</title>
</head>
<style>
    h2{
        font-size: 40px;
        font-weight: bolder;
    }
    p{
        font-style: oblique;
        font-family: "Freestyle Script";
        font-size: 30px;
    }
</style>
<body>
<h2>Het gekozen liedje is:</h2>
<p>{{$song->title}} van {{$song->singer}}</p>
</body>
</html>
