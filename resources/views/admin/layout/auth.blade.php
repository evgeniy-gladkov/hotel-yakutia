
<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Auth</title>
    <!-- Favicons -->
    <link type="image/png" sizes="96x96" rel="icon" href="/img/favicon.png">
    <link rel="apple-touch-icon" href="/img/apple-touch-icon.png" sizes="76x76">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/auth.css">
</head>
<body class="text-center">

<main class="form-signin w-100 m-auto">
    <form>
        <img class="mb-4" src="/img/favicon.png" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Cтраница входа </h1>

        <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" placeholder="login">
            <label for="floatingInput">Login</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Запомнить
            </label>
        </div>
        <button class="w-100 btn btn-lg btn btn-info" type="submit">Войти</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2022 Все права защищены.</p>
        <p class="mt-5 mb-3 text-muted">Разработано Евгением Гладковым.</p>
    </form>
</main>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>
