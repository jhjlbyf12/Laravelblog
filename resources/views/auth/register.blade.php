<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="text-center">Регистрация на сайте</h1>
        <div class="col-sm-6 mx-auto">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/register" method="post">
                @csrf
                <div class="mb-3">
                    <label for="">Имя</label>
                    <input name="name" type="text" class="form-control" placeholder="Имя">
                </div>
                <div class="mb-3">
                    <label for="">Email</label>
                    <input name="email" type="text" class="form-control" placeholder="Email">
                </div>
                <div class="mb-3">
                    <label for="">Пароль</label>
                    <input name="password" type="password" class="form-control" placeholder="Пароль">
                </div>
                <div class="mb-3">
                    <label for="">Подтверждение пароля</label>
                    <input name="password_confirmation" type="password" class="form-control" placeholder="Подтверждение пароля">
                </div>
                <div class="mb-3">
                    <input type="submit" class="form-control btn btn-primary" value="Зарегистрироваться">
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
