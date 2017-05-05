@extends('layout')

@section('content')

    <h1>Нові заявки</h1>

    <nav>
        <form class="search">
            <input class="form-control" placeholder="Пошук">
            <button class="btn btn-default">
                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
            </button>
        </form>
        <br>
    </nav>

    <table class="table">
        <tr>
            <th>Відділ</th>
            <th>Вид</th>
            <th>Дата</th>

        </tr>

        @foreach($messages as $message)
            <tr>
                <td>
                    <a href="/admin/messages/{{$message->id}}"> {{$message->department}}</a>
                </td>

                <td>{{$message->type}}</td>

                <td>{{$message->created_at}}</td>

                <td>
                    <a class="btn btn-default" href="/admin/messages/{{$message->id}}">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>
                </td>

            </tr>
        @endforeach

    </table>

@endsection

