@extends('layout')

@section('content')
    <nav>
        <a href="/admin/messages">Заявки <b>{{$newMessages}}</b></a>

        <span style="margin: 5px">|</span>

        <a href="/admin/updates">Оновлення <b>0</b></a>

        <span style="margin: 5px">|</span>

        <a href="/admin/updates">Оновлення <b>0</b></a>

        {{-- admin panel --}}

        <span style="margin: 5px">|</span>

        <a href="/admin/add-user">Створити користувача</a>
    </nav>
    <hr>
@endsection