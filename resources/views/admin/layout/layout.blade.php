
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LayoutAdmin</title>

    <!-- Icon Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">



    <!-- Favicons -->
    <link type="image/png" sizes="96x96" rel="icon" href="/img/favicon.png">
    <link rel="apple-touch-icon" href="/img/apple-touch-icon.png" sizes="76x76">


    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/layoutAdmin.css">
</head>
<body>

<header class="navbar navbar-dark sticky-top bg flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">Гостиница Якутия</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
</header>

<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3 sidebar-sticky" style="background-color:rgb(242,242,242)">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" target="_blank" aria-current="page" href="{{ url('/') }}">
                            <i class="bi bi-globe"></i>
                            <span data-feather="home" class="align-text-bottom"></span>
                            Перейти на сайт
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">
                            <i class="bi bi-file-earmark-text"></i>
                            <span data-feather="home" class="align-text-bottom"></span>
                            Главная
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-file-earmark-text"></i>
                            <span data-feather="file" class="align-text-bottom"></span>
                            Бронирование
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-file-earmark-text"></i>
                            <span data-feather="shopping-cart" class="align-text-bottom"></span>
                            Прайс номеров
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-file-earmark-text"></i>
                            <span data-feather="users" class="align-text-bottom"></span>
                            Фото галерея
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-file-earmark-text"></i>
                            <span data-feather="bar-chart-2" class="align-text-bottom"></span>
                            Спецпредложения
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-file-earmark-text"></i>
                            <span data-feather="layers" class="align-text-bottom"></span>
                            Контакты
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-door-closed"></i>
                            <span data-feather="layers" class="align-text-bottom"></span>
                            Выйти
                        </a>
                    </li>
                </ul>



            </div>
        </nav>

        @yield('content')
    </div>
</div>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>

