<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
    <title>Заявления</title>
</head>
<body>
    <h1>Заявления</h1>
    <a href="/appCreate">Подать заявление</a>
    <a href="/logout">Выход</a>
    <form action="/applications/sort" method="get">
        @csrf
        <label for="sort_by">Сортировать по:</label>
        <select name="sort_by" id="sort_by">
            <option value="1">Дата создания (Новые)</option>
            <option value="2">Дата создания (Старые)</option>
            <option value="3">Статус</option>
        </select>
        <div class="mt-2"><button class="btn btn-primary" type="submit">Применить сортировку</button></div>
        </form>
    <table class="tableInfo">
        <thead>
            <tr>
                <th>Номер машины</th>
                <th>Описание</th>
                <th>Статус заявления</th>
            </tr>
        </thead>
        @foreach ($apps as $item)
        <tbody>
            <tr>
                <td><p>{{$item->car_number}}</p></td>
                <td><p>{{$item->description}}</p></td>
                <td><p>{{$item->get_status->title}}</p></td>
            </tr>
        </tbody>
        @endforeach
    </table>
{{ $apps->withQueryString()->links('pagination::bootstrap-5') }}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
