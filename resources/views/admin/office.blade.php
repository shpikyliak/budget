@extends('layout')

@section('content')
    <nav>
        <a href="/admin/messages">Заявки <b>3</b></a>

        <span style="margin: 5px">|</span>

        <a href="/admin/updates">Оновлення <b>1</b></a>

        <span style="margin: 5px">|</span>

        <a href="/admin/updates">Оновлення <b>1</b></a>

        {{-- admin panel --}}

        <span style="margin: 5px">|</span>

        <a href="/admin/add-user">Створити користувача</a>
    </nav>
    <hr>
@endsection