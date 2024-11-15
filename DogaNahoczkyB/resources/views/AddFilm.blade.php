<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @csrf
    <form action="{{route('film.store')}}" method="POST">
        Cím: <input type="text" id="Film_Name" name="Film_Name">
        Producer: <input type="text" id="Film_Producer" name="Film_Producer">
        Genres: <select>
            @foreach


            @endforeach
        </select>
        Release: <input type="date" id="Film_Release" name="Film_Release">
    </form>
</body>
</html>