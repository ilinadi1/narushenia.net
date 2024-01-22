<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизация</title>
</head>
<body>
    @section('content')
    <div class="container">
        <div>
            @csrf
            <form action="/signup" method="POST" enctype="multipart/form-data">
                <label for="login">Введите логин</label>
                <input type="text" name="login" placeholder="Логин">
                <label for="password">Введите пароль</label>
                <input type="password" name="password" placeholder="Пароль">
                <button type="submit">Войти</button>
            </form>
        </div>
    </div>
    @endsection
</body>
</html>
