<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Заявления</h1>
    <a href="/appCreate">Подать заявление</a>
    <a href="/logout">Выход</a>
    @foreach ($apps as $item)
        <div>
            <p>{{$item->car_number}}</p>
            <p>{{$item->description}}</p>
            <p>{{$item->get_status->title}}</p>
        </div>
    @endforeach
</body>
</html>
