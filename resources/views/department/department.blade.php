@extends('layout')

@section('content')

    @if(Auth::user()->department_id == 1 && Auth::user()->type_id==1)
        <nav>
            <a href="/departments/create" class="btn btn-default">Створити</a>

        </nav>
        <br>
    @endif
    <hr>

    <table class="table">
        <tr>
            <th>Назва</th>
            <th>Дата створення</th>
            <th>Бюджети</th>
            <th>
        </tr>
        @foreach($departments as $collection)
            @foreach($collection as $department)
                <tr>
                    <td>
                         {{$department->name}}
                    </td>

                    <td>
                        {{$department->created_at}}
                    </td>

                    <td>
                        <a href="/departments/{{$department->id}}/budgets">
                            <span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span>
                        </a>
                    </td>
                    <td>
                        <a href="/departments/{{$department->id}}/delete" class="btn btn-default">
                            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                        </a>
                    </td>
                </tr>
            @endforeach
        @endforeach

    </table>

@endsection