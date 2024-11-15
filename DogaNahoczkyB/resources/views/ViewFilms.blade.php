<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('film.get')}}">
       @csrf
       <ul>
       @foreach ($Kaka as kaki)
       <li>{{kaki->Film_Name}}</li>
       @endforeach
        </ul>
    </form>
</body>
</html>