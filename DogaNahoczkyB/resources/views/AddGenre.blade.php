<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add genre</title>
</head>
<body>asd
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
    <form action="{{route('genre.store')}}" method="POST">
        @csrf
        <input type="text" id="Film_Gen_Genre" name="Film_Gen_Genre">
        <input type="submit">
    </from>
</body>
</html>