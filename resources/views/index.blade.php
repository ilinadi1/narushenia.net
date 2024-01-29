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
                    <label for="loginOne" class="form-label">Введите логин</label>
                    <input type="text" name="loginOne" placeholder="Логин" class="form-control">
                    @error('loginOne')
                        <div class="alert alert-danger alert-dismissible">
                            <div class="alert-text">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="passwordOne" class="form-label"> Введите пароль </label>
                    <input type="password" name="passwordOne" placeholder="Пароль"  class="form-control">
                    @error('passwordOne')
                        <div class="alert alert-danger alert-dismissible">
                            <div class="alert-text">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Войти</button>
                </div>
            </form>
        </div>
        <div>
            <form action="/signup" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="login" class="form-label">Введите логин</label>
                    <input type="text" name="login" placeholder="Логин" class="form-control">
                    @error('login')
                        <div class="alert alert-danger alert-dismissible">
                            <div class="alert-text">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Введите пароль</label>
                    <input type="password" name="password" placeholder="Пароль" class="form-control">
                    @error('password')
                        <div class="alert alert-danger alert-dismissible">
                            <div class="alert-text">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Введите имя</label>
                    <input type="text" name="name" placeholder="Имя" class="form-control">
                    @error('name')
                        <div class="alert alert-danger alert-dismissible">
                            <div class="alert-text">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="surname" class="form-label">Введите фамилию</label>
                    <input type="text" name="surname" placeholder="Фамилия" class="form-control">
                    @error('surname')
                        <div class="alert alert-danger alert-dismissible">
                            <div class="alert-text">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="patronymic" class="form-label">Введите отчество</label>
                    <input type="text" name="patronymic" placeholder="Отчество" class="form-control">
                    @error('patronymic')
                        <div class="alert alert-danger alert-dismissible">
                            <div class="alert-text">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Введите номер телефона</label>
                    <input type="tel" name="phone" placeholder="Номер телефона" class="form-control">
                    @error('phone')
                        <div class="alert alert-danger alert-dismissible">
                            <div class="alert-text">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Введите электронную почту</label>
                    <input type="email" name="email" placeholder="Электронная почта" class="form-control">
                    @error('email')
                        <div class="alert alert-danger alert-dismissible">
                            <div class="alert-text">
                                {{ $message }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
