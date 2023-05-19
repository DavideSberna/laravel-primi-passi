<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <section>
        <nav>
            <ul>
                @foreach($nav as $page)
                    <li><a href="{{ route($page) }}">{{ $page }}</a></li>
                @endforeach
            </ul>
        </nav>
    </section>
</body>
</html>
