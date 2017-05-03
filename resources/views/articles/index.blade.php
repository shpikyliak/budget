@extends('layout')
@section('content')
    <h1>Статті бюджетів</h1>

    <nav>
        <a href="create-article.html" class="btn btn-default">Створити</a>

        <form class="search">
            <input class="form-control" placeholder="Пошук">
            <button class="btn btn-default">
                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
            </button>

        </form>
    </nav>
    <table class="table">
        <tr>
            <th>Назва</th>
            <th>Відділ</th>
            <th>Дата</th>
            <th></th>
        </tr>
        @foreach($articles as $article)

        <tr>
            <td>
                <a href="article/{{$article->id}}}"> {{$article->name}}</a>
            </td>
            <td>{{$article->department}}</td>
            <td>{{$article->timestamp}}</td>
            <td>
                <button class="btn btn-default">
                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                </button>
                <button class="btn btn-default">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </button>
            </td>
        </tr>
        @endforeach

    </table>
@endsection