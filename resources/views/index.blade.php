@extends('layout.index')

@section('content')
    <div class="container">
        <h1 class="main-title-h1 text-center p-5">Гостинице - Якутия</h1>
        <div class="row justify-content-around">
            <div class="col-lg-8 col-sm-12">
                <h2 class="main-title-h2 text-center p-3">Добро пожаловать!</h2>
                <div class="text">
                    <p class="main-text-p">«Якутия» - уютная трёхзвёздочная мини-гостиница, мы занимаем 4-ый этаж одного
                        из деловых центров
                        города – бизнес-центр «Якутия». В расположении нашей гостиницы есть неоспоримое преимущество, с
                        одной стороны, соседство с одним из центральных мест отдыха горожан - набережной р. Обь, а с
                        другой, близость с одной из узловых транспортных развязок – М "Речной вокзал" (железнодорожная
                        станция пригородных поездов, остановки автобусов, трамваев, троллейбусов, маршрутного
                        такси).
                    </p>
                    <p class="main-text-p">
                        Недалеко от нас можно найти место для обеда, ужина на любой вкус и кошелек (столовая, кафе,
                        бистро, рестораны).
                    </p>
                    <p class="main-text-p">
                        Интерьер нашей гостиницы выполнен в сдержанных, спокойных тонах, все номера светлые и
                        просторные. Номерной фонд гостиницы - 15 номеров различных категорий.
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12 text-center">
                <img class="img-thumbnail" src="/img/img-1.jpeg" height="620px" alt="">
            </div>
        </div>
        <hr>
        <div class="row justify-content-around">
            <div class="col-12 col-md-6">
                <h2 class="main-title-h2 text-center p-3 h2-li">В наличие</h2>
                <ul class="list-counter-circle">
                    <li>система кондиционирования</li>
                    <li>собственная ванная комната</li>
                    <li>мини-холодильник</li>
                    <li>средства коммуникации (ТВ)</li>
                    <li>бесплатный Wi-Fi</li>
                    <li>завтрак включен в стоимость суток</li>
                </ul>
            </div>
            <div class="col-12 col-md-6">
                <h2 class="main-title-h2 text-center p-3 h2-li">К услугам представленны</h2>
                <ul class="list-counter-circle">
                    <li>автомат для чистки обуви</li>
                    <li>бесплатное бронирование</li>
                    <li>круглосуточная стойка регистрации</li>
                    <li>ежедневная уборка номера</li>
                    <li>отсутствие фиксированного расчетного часа</li>
                    <li>бесплатная открытая парковка</li>
                    <li>платная подземная парковка</li>
                    <li>гладильные услуги</li>
                    <li>обслуживание номеров</li>
                    <li>услуга "звонок-будильник"</li>
                    <li>фен</li>
                    <li>чайник, микроволновая печь</li>
                </ul>
            </div>
        </div>
        <hr>
        {{--        <h2 class="text-center p-5 h2-li">Друзья, просьба ознакомиться с основными<a--}}
        {{--                    href="https://vk.com/doc-26810260_534320173?dl=d6c4e7c67499ccac89"> правилами--}}
        {{--                </a>пребывания в нашей гостинице.</h2>--}}

        <h2 class="text-center p-5 h2-li">Завтрак</h2>
        <div class="row justify-content-around">
            <div class="col-lg-4 col-sm-12 text-center">
                <img src="/img/time.jpeg" class="img-thumbnail" alt="...">
            </div>
            <div class="col-lg-8 col-sm-12">
                <p class="main-text-p">
                    Завтрак у нас проходит в уютном кафе "Time". Мы предлагаем континентальный завтрак с возможностью
                    выбора 2-х блюд и напитка. Ассортимент достаточно широк: это каша дня, омлет, яичница, сэндвич,
                    блинчики, мюсли, сырники и многое другое. Завершить утреннюю трапезу мы предлагаем ароматным
                    свежесваренным кофе, который взбодрит и подарит хорошее настроение.
                </p>
            </div>
        </div>
        <hr>
        <h2 class="text-center p-5 h2-li">Сервис</h2>
        <div class="row justify-content-around">
            <div class="col-lg-8 col-sm-12">
                <p class="main-text-p">
                    Небольшой номерной фонд, соответственно, небольшая загруженность персонала позволяет формировать
                    индивидуальный подход к каждому гостю, создавать атмосферу домашнего уюта, не пренебрегая при этом,
                    качеством сервиса. Мы стремимся сделать пребывание в нашей гостинице уютным, комфортным и
                    экономически выгодным.
                </p>
            </div>
            <div class="col-lg-4 col-sm-12 text-center">
                <img src="/img/reception.jpeg" class="img-thumbnail" alt="...">
            </div>
        </div>
        <hr>
        <div class="row">
            <h2 class="main-title-h2 text-center p-3 h2-li">Наше местоположенние</h2>
            <div class="col">
                <p class="main-text-p">
                    <strong>Расположение: </strong>Гостиница расположена в центре г. Новосибирска, недалеко от одной из
                    узловых
                    транспортных развязок - М.
                    "Речной вокзал" (железнодорожная станция пригородных поездов, остановки автобусов, трамваев,
                    троллейбусов, маршрутных такси)
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="main-text-p">
                    <strong>Проезд: </strong>Станция метро «Речной вокзал». От "Речного вокзала" 5-7 минут пешком (по
                    улице Большевистской) или одна
                    остановка на транспорте в сторону Академгородка.
                </p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10 col-sm-12">
                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A1d85796631d1d32ec364a594a3e9ab4fe5138530de25d57ba1930f9651fa3e0a&amp;source=constructor"
                        width="100%" height="400" frameborder="0"></iframe>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="main-text-p"><strong>Расстояние: </strong>от Аэропорта до отеля: 21,5 км</p>
                <p class="main-text-p"><strong>Расстояние: </strong>от ЖД вокзала до отеля: 5,5 км</p>
                <p class="main-text-p"><strong>Расстояние: </strong>от отеля до центра: 4 км</p>
            </div>
        </div>
    </div>
@endsection