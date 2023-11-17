<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/addOcene" method="post">
        @csrf
        @if($errors->any())
        <p>{{$errors->first()}}</p>
        @endif
        <input type="text" name="predmet" placeholder="Predmet">
        <input type="number" name="ocena" placeholder="ocena" max="5" min="1" step="1">
        <input type="text" name="profesor" placeholder="Profesor" >
        <input type="number" name="user_id" placeholder="user_id">
        <button type="submit">New rating</button>
    </form>
    @foreach($ocene as $ocena)
    <p>{{$ocena->predmet}}</p>
    <p>{{$ocena->profesor}}</p>
    <p>{{$ocena->ocena}}</p>
    <p><a href="/delete{{$ocena->id}}">Dalete</a></p>
    
    <hr>
    @endforeach
    
</body>
</html>