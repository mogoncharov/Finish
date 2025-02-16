@extends('layouts.app')

@section('content')

<main class="form-signin m-auto">
    <h2>Статистика доходности</h2>

    <p>Админов: {{$data->admin_count}}</p>
    <p>Рекламодателей: {{$data->advertiser_count}}</p>
    <p>Веб-мастеров: {{$data->webmaster_count}}</p>
    <p>Общее кол-во offer-ов: {{$data->offers_count}}</p>
    <p>Кол-во действующих offer-ов: {{$data->offers_active_count}}</p>
    <p>Общее кол-во сгенерированных ссылок: {{$data->links_count}}</p>
    <p>Кол-во действующих ссылок: {{$data->links_active_count}}</p>
    <p>Общее кол-во переходов по ссылкам: {{$data->redirect_count}}</p>
    <p>Кол-во успешных переходов по ссылкам: {{$data->redirect_success_count}}</p>
    <p>Доход системы: {{$data->system_profit}}</p>
</main>

@endsection

@section('js')
<script type="text/javascript">

</script>

@endsection