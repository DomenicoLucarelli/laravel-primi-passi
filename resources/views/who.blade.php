<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('style.css') }}">

    <title>Who</title>
</head>
<body>
    <header>
        <nav>
            @foreach ($headerEl as $element)
                <a href="{{route($element)}}">{{$element}}</a>
            @endforeach
        </nav>
    </header>

    <h1>{{$title}}</h1>

</body>
</html>