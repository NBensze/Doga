<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@if($errors->any())
       <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
       </ul>
    @endif

    @if(session('success'))
        <p>{{session('success')}}</p>
    @endif
    <form action="{{route('film.store')}}" method="POST">
        @csrf
        Cím: <input type="text" id="Film_Name" name="Film_Name">
        Producer: <input type="text" id="Film_Producer" name="Film_Producer">
        Genres: <select id="Film_Genre" name="Film_Genre">
            @foreach ($Genres as $Genre)
                <option value="{{$Genre->id}}">{{$Genre->Film_Gen_Genre}}</option>
            @endforeach
        </select>
        Release: <input type="date" id="Film_Release" name="Film_Release">
        <input type="submit">
    </form>
</body>
</html>