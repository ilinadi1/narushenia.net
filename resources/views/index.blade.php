<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Авторизация</title>
</head>
<body>
    <div class="containerMain">
        <div>
            <form action="/signin" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="login">Введите логин</label>
                    <input type="text" name="login" placeholder="Логин">
                </div>
                <div class="mb-3">
                    <label for="password">Введите пароль</label>
                    <input type="password" name="password" placeholder="Пароль">
                </div>
                <div class="mb-3">
                    <button type="submit">Войти</button>
                </div>
            </form>
        </div>
        <div>
            <form action="/signup" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="login">Введите логин</label>
                    <input type="text" name="login" placeholder="Логин">
                </div>
                <div class="mb-3">
                    <label for="password">Введите пароль</label>
                    <input type="password" name="password" placeholder="Пароль">
                </div>
                <div class="mb-3">
                    <label for="name">Введите имя</label>
                    <input type="text" name="name" placeholder="Имя">
                </div>
                <div class="mb-3">
                    <label for="surname">Введите фамилию</label>
                    <input type="text" name="surname" placeholder="Фамилия">
                </div>
                <div class="mb-3">
                    <label for="patronymic">Введите отчество</label>
                    <input type="text" name="patronymic" placeholder="Отчество">
                </div>
                <div class="mb-3">
                    <label for="phone">Введите номер телефона</label>
                    <input type="tel" name="phone" placeholder="Номер телефона">
                </div>
                <div class="mb-3">
                    <label for="email">Введите электронную почту</label>
                    <input type="email" name="email" placeholder="Электронная почта">
                </div>
                <div class="mb-3">
                    <button type="submit">Зарегистрироваться</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
