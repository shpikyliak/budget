@extends('layout')
@section('content')
    <nav>
        @if(Auth::user()->department_id == $article->user->department_id)
            <a href="/article/{{$article->id}}/edit" class="btn btn-primary">Змінити</a>
        @else
            <a href="/article/{{$article->id}}/send-message" class="btn btn-primary">Відправити заявку</a>
        @endif
        <a style="float: right" href="/budget/{{$article->budget_id}}" class="btn btn-default">Назад</a>
    </nav>
    <div class="row">
        <div class="row">

            <h4>Бюджет: {{$article->budget->name}}</h4>

            <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
            {{$article->updated_at}}

        </div>

        <div class="col-md-6">
            <table class="small-table table ">
                <tr>
                    <td>
                        <b>Квартал 1 </b>
                    </td>

                    <td> {{$article->quarter1}} </td>
                </tr>
                <tr>
                    <td>
                        <b>Квартал 2</b>
                    </td>

                    <td> {{$article->quarter2}}</td>
                </tr>
                <tr>
                    <td>
                        <b>Квартал 3</b>
                    </td>

                    <td> {{$article->quarter3}}</td>
                </tr>
                <tr>
                    <td>
                        <b>Квартал 4</b>
                    </td>

                    <td> {{$article->quarter4}}</td>
                </tr>
            </table>
        </div>
        <div class="col-md-6">
            <h5> Опис:</h5>
            <p class="bg-warning message-text-small">{{$article->description}}</p>

        </div>

    </div>
@endsection