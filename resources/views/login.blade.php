<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<h1>
        @if (Auth::user())
            {{Auth::user()->name}}        
        @endif
</h1>

<form method="post" action="{{url('login/')}}">
        @csrf
        <label for="">Email:</label>
        <input type="email" placeholder="@example.com" name="email" value="">
        <br>
        <label for="">Contraseña</label>
        <input type="password" placeholder="*******" name="password" value ="">
        <br>
        <button type="submit">Ingresar</button>
</form>
</body>
</html>