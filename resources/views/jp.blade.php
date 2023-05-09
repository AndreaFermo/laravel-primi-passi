<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Primi Passi</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{route('home')}}">Inglese</a>
                <li><a href="{{route('it')}}">Italiano</a>
                <li><a href="{{route('es')}}">Spagnolo</a>
                <li><a href="{{route('jp')}}">Giapponese</a>
            </ul>
        </nav>
    </header>
    <main>
        <h1>{{$salutoJp}}</h1>
    </main>
</body>
</html>