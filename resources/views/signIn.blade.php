<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>
</head>
<body>
    <div class="container">
        <div>
            @csrf
            <form action="/signin" method="POST" enctype="multipart/form-data">
                <label for="login">Введите логин</label>
                <input type="text" name="login" placeholder="Логин">
                <label for="password">Введите пароль</label>
                <input type="password" name="password" placeholder="Пароль">
                <label for="name">Введите ФИО</label>
                <input type="text" name="name" placeholder="ФИО">
                <label for="phone">Введите номер телефона</label>
                <input type="tel" name="phone" placeholder="Номер телефона">
                <label for="email">Введите электронную почту</label>
                <input type="email" name="email" placeholder="Электронная почта">
                <button type="submit">Зарегистрироваться</button>
            </form>
        </div>
    </div>
</body>
</html>
