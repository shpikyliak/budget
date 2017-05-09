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
            <th>Відправник</th>
            <th>Відділ</th>
            <th>Заявка стаття</th>
            <th>Вид</th>
            <th>Дата</th>

        </tr>

        @foreach($messages as $message)
            <tr>
                <td>
                    {{$message->user->name}}
                </td>
                <td>
                    {{$message->from_department->name}}
                </td>
                <td>
                    {{$message->article->name}}
                </td>

                <td><span class="glyphicon glyphicon-{{$message->type->gliphon}}"></span></td>

                <td>{{$message->created_at}}</td>

                <td>
                    <a class="btn btn-default" href="/admin/messages/{{$message->id}}">
                        Відповісти
                    </a>
                </td>

            </tr>
        @endforeach

    </table>

@endsection

