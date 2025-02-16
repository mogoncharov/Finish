@extends('layouts.app')

@section('content')

<h1>Добро пожаловать в трекер трафика SF-AdTech </h1>
<p>Приложение SF-AdTech — это трекер трафика, созданный для организации взаимодействия компаний (рекламодателей), которые хотят привлечь к себе на сайт посетителей и покупателей (клиентов), и владельцев сайтов (веб-мастеров), на которые люди приходят, например, чтобы почитать новости или пообщаться на форуме</p>

<p>Вам доступен следующий функционал:</p>
<ul class="list-group">

@if (Auth::user()->role == 0)
        <li class="list-group-item">Просмотр и редактирование учетных записей</li>
        <li class="list-group-item">Заведение новой учетной записи</li>
        <li class="list-group-item">Просмотр статистики трекера</li>
        <li class="list-group-item">Просмотр данных по ссылкам</li>
@elseif(Auth::user()->role == 1)
    <li class="list-group-item">Просмотр и изменение offer-ов</li>
    <li class="list-group-item">Создание нового offer-а</li>
    <li class="list-group-item">Статистика по offer-ам</li>
@else
    <li class="list-group-item">Список активных offer-ов и возможность подписаться на них</li>
    <li class="list-group-item">Статистика по offer-ам</li>
@endif
</ul>

@endsection