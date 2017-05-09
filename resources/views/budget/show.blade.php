@extends('layout')

@section('content')

    <h1>{{$budget->name}}</h1>
    <p style="padding: 20px">
        {{$budget->description}}
    </p>

    <p style="padding: 20px">
        <b>Відділ:</b> {{$budget->department_id}}
    </p>


    <hr>

    <nav>
        <a href="/budget/{{$budget->id}}/add-article" class="btn btn-default">Додати статтю</a>


        <form class="search">
            <input class="form-control" placeholder="Пошук">
            <button class="btn btn-default">
                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
            </button>
        </form>
    </nav>
    <table class="table">
        <tr>
            <th>Cтаття</th>
            <th>Тип</th>
            <th>Кв. 1</th>
            <th>Кв. 2</th>
            <th>Кв. 3</th>
            <th>Кв. 4</th>
            <th>Оновлено</th>
            <th></th>
        </tr>
        @foreach($articles as $article)
            <tr>
                <td>
                    <a href="/article/{{$article->id}}"> {{$article->name}}</a>
                </td>

                <td>{{$article->type}}</td>

                <td>{{$article->quarter1}}</td>

                <td>{{$article->quarter2}}</td>

                <td>{{$article->quarter3}}</td>

                <td>{{$article->quarter4}}</td>

                <td>{{$article->updated_at}}</td>

                <td>
                    <a class="btn btn-default" href="/article/{{$article->id}}/edit">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>
                    <a class="btn btn-default" href="/article/{{$article->id}}/delete">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    </a>
                </td>
            </tr>
        @endforeach


    </table>

@endsection