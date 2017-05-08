@extends('layout')
@section('content')

    <nav>
        <a style="float: right" href="#" class="btn btn-primary">Назад</a>
    </nav>
    <br>
    <hr>

    <h3 style="margin-left: 35px">Стаття: {{$article}}</h3>
    <br>
    <hr>

    @foreach($messages as $message)

        <div class="row">
            <div class="row">

                <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                {{$message->created_at}}

                <p class="message_type"> Заявка </p>

            </div>

            <div class="col-md-6">
                <table class="small-table table ">
                    <tr>
                        <td>
                            <b>Квартал 1 </b>
                        </td>

                        <td> {{json_decode($message->to_change)->quarter1}} </td>
                    </tr>
                    <tr>
                        <td>
                            <b>Квартал 2</b>
                        </td>

                        <td> {{json_decode($message->to_change)->quarter2}}</td>
                    </tr>
                    <tr>
                        <td>
                            <b>Квартал 3</b>
                        </td>

                        <td> {{json_decode($message->to_change)->quarter3}}</td>
                    </tr>
                    <tr>
                        <td>
                            <b>Квартал 4</b>
                        </td>

                        <td> {{json_decode($message->to_change)->quarter4}}</td>
                    </tr>
                </table>
            </div>
            <div class="col-md-6">
                <h5> Повідомлення:</h5>
                <p class="bg-warning message-text-small">{{$message->message}}</p>

            </div>

        </div>

        <hr>
    @endforeach


@endsection