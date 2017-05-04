@extends('layout')

@section('content')

    <h1>Моделі бюджетування</h1>
    <nav>
        <a href="/budget/create" class="btn btn-default">Створити</a>

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
        @foreach($budgets as $budget)
            <tr>
                <td>
                    <a href="/budget/{{$budget->id}}"> {{$budget->name}}</a>
                </td>

                <td>{{$budget->department}}</td>
                <td>{{$budget->created_at}}</td>
                <td>
                    <a class="btn btn-default" href="/budget/{{$budget->id}}/edit">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>
                    <a class="btn btn-default" href="/budget/{{$budget->id}}/delete">
                        <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    </a>
                </td>
            </tr>
        @endforeach


    </table>

@endsection
