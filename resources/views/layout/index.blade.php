<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--  google шрифты  --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500&display=swap"
          rel="stylesheet">
    <!-- Icon Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="/css/style.css" rel="stylesheet">

    <!-- Favicons -->
    <link type="image/png" sizes="96x96" rel="icon" href="/img/favicon.png">
    <link rel="apple-touch-icon" href="/img/apple-touch-icon.png" sizes="76x76">

    <title>hotel-yakutia</title>
</head>
<body>
{{-- Navigation --}}
<header>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-bg-color">
        <div class="container-fluid">
            <a class="navbar-brand font" href="#"><i class="bi bi-gem mx-3"></i>Гостиница Якутия</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Бронирование</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Прайс-лист</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Фотогалерея</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Спецпредложения</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
{{-- Navigation --}}

{{-- Carousel --}}
<section>
    <div class="container-fluid my-carousel">
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/img/1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/img/2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/img/3.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>
{{-- Carousel --}}

{{-- main --}}
<main>

</main>
{{-- main --}}

{{-- footer --}}
<footer>
    <section class="container">
        <div class="row">
            <div class="col-md-4 col-6">
                <h5>Меню</h5>
                <ul class="list-unstyled">
                    <li><a href="#">Главная</a></li>
                    <li><a href="#">Бронирование</a></li>
                    <li><a href="#">Прайслист</a></li>
                    <li><a href="#">Фотогалерея</a></li>
                    <li><a href="#">Спецпредложения</a></li>
                </ul>
            </div>
            <div class="col-md-4 col-6">
                <h5>Информация</h5>
                <ul class="list-unstyled">
                    <li>г. Новосибирск, Большевистская 103, 4 этаж</li>
                    <li>Круглосуточно</li>

                </ul>
            </div>
            <div class="col-md-4 col-sm-12">
                <h5>Контакты</h5>
                <ul class="list-unstyled">
                    <li>(383) 266-53-08</li>
                    <li>(383) 266-97-19</li>
                    <li>Факс: (383) 266-53-08</li>
                    <li>yakutia-nsk@list.ru</li>
                    <li>
                        <a href="https://vk.com/hotelyakutia">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="35px" height="35px">
                                <path fill="#1976d2" d="M24 4A20 20 0 1 0 24 44A20 20 0 1 0 24 4Z"/>
                                <path fill="#fff"
                                      d="M35.937,18.041c0.046-0.151,0.068-0.291,0.062-0.416C35.984,17.263,35.735,17,35.149,17h-2.618 c-0.661,0-0.966,0.4-1.144,0.801c0,0-1.632,3.359-3.513,5.574c-0.61,0.641-0.92,0.625-1.25,0.625C26.447,24,26,23.786,26,23.199 v-5.185C26,17.32,25.827,17,25.268,17h-4.649C20.212,17,20,17.32,20,17.641c0,0.667,0.898,0.827,1,2.696v3.623 C21,24.84,20.847,25,20.517,25c-0.89,0-2.642-3-3.815-6.932C16.448,17.294,16.194,17,15.533,17h-2.643 C12.127,17,12,17.374,12,17.774c0,0.721,0.6,4.619,3.875,9.101C18.25,30.125,21.379,32,24.149,32c1.678,0,1.85-0.427,1.85-1.094 v-2.972C26,27.133,26.183,27,26.717,27c0.381,0,1.158,0.25,2.658,2c1.73,2.018,2.044,3,3.036,3h2.618 c0.608,0,0.957-0.255,0.971-0.75c0.003-0.126-0.015-0.267-0.056-0.424c-0.194-0.576-1.084-1.984-2.194-3.326 c-0.615-0.743-1.222-1.479-1.501-1.879C32.062,25.36,31.991,25.176,32,25c0.009-0.185,0.105-0.361,0.249-0.607 C32.223,24.393,35.607,19.642,35.937,18.041z"/>
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/hotel_yakutia/">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="35px" height="35px">
                                <radialGradient id="yOrnnhliCrdS2gy~4tD8ma" cx="19.38" cy="42.035" r="44.899"
                                                gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#fd5"/>
                                    <stop offset=".328" stop-color="#ff543f"/>
                                    <stop offset=".348" stop-color="#fc5245"/>
                                    <stop offset=".504" stop-color="#e64771"/>
                                    <stop offset=".643" stop-color="#d53e91"/>
                                    <stop offset=".761" stop-color="#cc39a4"/>
                                    <stop offset=".841" stop-color="#c837ab"/>
                                </radialGradient>
                                <path fill="url(#yOrnnhliCrdS2gy~4tD8ma)"
                                      d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z"/>
                                <radialGradient id="yOrnnhliCrdS2gy~4tD8mb" cx="11.786" cy="5.54" r="29.813"
                                                gradientTransform="matrix(1 0 0 .6663 0 1.849)"
                                                gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#4168c9"/>
                                    <stop offset=".999" stop-color="#4168c9" stop-opacity="0"/>
                                </radialGradient>
                                <path fill="url(#yOrnnhliCrdS2gy~4tD8mb)"
                                      d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z"/>
                                <path fill="#fff"
                                      d="M24,31c-3.859,0-7-3.14-7-7s3.141-7,7-7s7,3.14,7,7S27.859,31,24,31z M24,19c-2.757,0-5,2.243-5,5	s2.243,5,5,5s5-2.243,5-5S26.757,19,24,19z"/>
                                <circle cx="31.5" cy="16.5" r="1.5" fill="#fff"/>
                                <path fill="#fff"
                                      d="M30,37H18c-3.859,0-7-3.14-7-7V18c0-3.86,3.141-7,7-7h12c3.859,0,7,3.14,7,7v12	C37,33.86,33.859,37,30,37z M18,13c-2.757,0-5,2.243-5,5v12c0,2.757,2.243,5,5,5h12c2.757,0,5-2.243,5-5V18c0-2.757-2.243-5-5-5H18z"/>
                            </svg>
                        </a>
                        <a href="mailto:yakutia-nsk@list.ru">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="35px" height="35px">
                                <linearGradient id="NvW_RwTAona1rlOp72mkqa" x1="24" x2="24" y1="42" y2="6.207"
                                                gradientUnits="userSpaceOnUse">
                                    <stop offset="0" stop-color="#1ac8fc"/>
                                    <stop offset=".258" stop-color="#1bb6fa"/>
                                    <stop offset=".775" stop-color="#1c86f5"/>
                                    <stop offset="1" stop-color="#1d70f2"/>
                                </linearGradient>
                                <path fill="url(#NvW_RwTAona1rlOp72mkqa)"
                                      d="M34,42H14c-4.411,0-8-3.589-8-8V14c0-4.411,3.589-8,8-8h20c4.411,0,8,3.589,8,8v20 C42,38.411,38.411,42,34,42z"/>
                                <path d="M34,16c0.178,0,0.347,0.031,0.512,0.074l-7.824,7.825C25.946,24.64,24.973,25.01,24,25.01 s-1.946-0.37-2.688-1.111l-7.824-7.825C13.653,16.031,13.822,16,14,16H34 M35.926,17.488C35.969,17.653,36,17.822,36,18v12 c0,0.178-0.031,0.347-0.074,0.512L29.414,24L35.926,17.488 M12.074,17.488L18.586,24l-6.511,6.511C12.031,30.347,12,30.178,12,30 V18C12,17.822,12.031,17.653,12.074,17.488 M27.99,25.404l6.522,6.522C34.347,31.969,34.178,32,34,32H14 c-0.178,0-0.347-0.031-0.512-0.074l6.522-6.522c1.117,1.063,2.55,1.605,3.99,1.605S26.873,26.467,27.99,25.404 M34,15H14 c-0.244,0-0.495,0.035-0.768,0.108c-0.346,0.092-0.616,0.361-0.709,0.707c-0.092,0.341,0.003,0.704,0.248,0.956 c-0.189-0.183-0.44-0.283-0.697-0.283c-0.087,0-0.174,0.011-0.26,0.034c-0.345,0.093-0.615,0.363-0.707,0.709 C11.035,17.505,11,17.756,11,18v12c0,0.244,0.035,0.495,0.108,0.768c0.092,0.346,0.361,0.616,0.707,0.709 c0.086,0.023,0.173,0.034,0.26,0.034c0.257,0,0.508-0.099,0.696-0.282c-0.245,0.253-0.34,0.616-0.248,0.956 c0.093,0.345,0.363,0.615,0.709,0.707C13.505,32.965,13.756,33,14,33h20c0.244,0,0.495-0.035,0.768-0.108 c0.346-0.092,0.616-0.361,0.709-0.707c0.092-0.341-0.003-0.704-0.248-0.956c0.189,0.183,0.44,0.282,0.696,0.282 c0.087,0,0.174-0.011,0.26-0.034c0.345-0.093,0.615-0.363,0.707-0.709C36.965,30.495,37,30.244,37,30V18 c0-0.244-0.035-0.495-0.108-0.768c-0.092-0.346-0.361-0.616-0.707-0.709c-0.086-0.023-0.173-0.034-0.26-0.034 c-0.257,0-0.508,0.099-0.697,0.282c0.245-0.253,0.34-0.616,0.248-0.956c-0.093-0.345-0.363-0.615-0.709-0.707 C34.495,15.035,34.244,15,34,15L34,15z"
                                      opacity=".05"/>
                                <path d="M34,15.5H14c-0.203,0-0.406,0.029-0.64,0.091c-0.173,0.046-0.308,0.181-0.354,0.353 c-0.046,0.173,0.003,0.357,0.129,0.483l7.824,7.825C21.77,25.063,22.85,25.51,24,25.51s2.23-0.447,3.041-1.257l7.824-7.825 c0.126-0.126,0.176-0.311,0.129-0.483c-0.046-0.173-0.182-0.307-0.354-0.353C34.406,15.529,34.203,15.5,34,15.5L34,15.5z M35.926,16.988c-0.131,0-0.259,0.051-0.354,0.146l-6.511,6.512c-0.195,0.195-0.195,0.512,0,0.707l6.511,6.511 c0.095,0.095,0.223,0.146,0.354,0.146c0.043,0,0.087-0.006,0.13-0.017c0.173-0.046,0.307-0.182,0.353-0.354 C36.471,30.406,36.5,30.203,36.5,30V18c0-0.203-0.029-0.406-0.091-0.64c-0.046-0.173-0.181-0.308-0.353-0.354 C36.013,16.994,35.969,16.988,35.926,16.988L35.926,16.988z M12.074,16.988c-0.043,0-0.087,0.006-0.13,0.017 c-0.173,0.046-0.307,0.182-0.353,0.354C11.529,17.594,11.5,17.797,11.5,18v12c0,0.203,0.029,0.406,0.091,0.64 c0.046,0.173,0.181,0.308,0.353,0.354c0.043,0.012,0.087,0.017,0.13,0.017c0.131,0,0.259-0.051,0.354-0.146l6.511-6.511 c0.195-0.195,0.195-0.512,0-0.707l-6.511-6.512C12.333,17.04,12.205,16.988,12.074,16.988L12.074,16.988z M27.99,24.904 c-0.124,0-0.248,0.046-0.345,0.138c-0.995,0.946-2.289,1.467-3.645,1.467s-2.651-0.521-3.645-1.467 c-0.097-0.092-0.221-0.138-0.345-0.138c-0.128,0-0.256,0.049-0.354,0.146l-6.522,6.522c-0.126,0.126-0.176,0.311-0.129,0.483 s0.182,0.307,0.354,0.353C13.594,32.471,13.797,32.5,14,32.5h20c0.203,0,0.406-0.029,0.64-0.091 c0.173-0.046,0.308-0.181,0.354-0.353s-0.003-0.357-0.129-0.483l-6.522-6.522C28.246,24.953,28.118,24.904,27.99,24.904 L27.99,24.904z"
                                      opacity=".07"/>
                                <path fill="#f9f9f9"
                                      d="M35.926,17.488L29.414,24l6.511,6.511C35.969,30.347,36,30.178,36,30V18 C36,17.822,35.969,17.653,35.926,17.488z M26.688,23.899l7.824-7.825C34.347,16.031,34.178,16,34,16H14 c-0.178,0-0.347,0.031-0.512,0.074l7.824,7.825C22.795,25.38,25.205,25.38,26.688,23.899z M12.074,17.488 C12.031,17.653,12,17.822,12,18v12c0,0.178,0.031,0.347,0.074,0.512L18.586,24L12.074,17.488z M24,27.009 c-1.44,0-2.873-0.542-3.99-1.605l-6.522,6.522C13.653,31.969,13.822,32,14,32h20c0.178,0,0.347-0.031,0.512-0.074l-6.522-6.522 C26.873,26.467,25.44,27.009,24,27.009z"/>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</footer>
{{-- footer --}}

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
</body>
</html>