@extends('layout')

@section('content')

    <nav>
        @if($message->type_id == 2)
            <a href="/admin/messages/{{$message->id}}/accept" class="btn btn-success">Підтвердити</a>
        @endif
        <a style="float: right" href="/admin/messages/{{$message->article_id}}/history" class="btn btn-primary">Переглянути історію</a>
    </nav>
    <br>
    <hr>
    <h4>Стаття: {{$message->article->name}}</h4>



    <h5>Відділ: {{$message->from_department->name}}</h5>

    <p><span class="glyphicon glyphicon-time" aria-hidden="true"></span> {{$message->created_at}}</p>
    <p class="bg-warning message-text">{{$message->message}}</p>
    <form method="post" action="/admin/messages/{{$message->id}}/sendAnswer">
        <div style="padding: 17px" class="row">
            <div class="col-sm-4">
                <label class="control-label">Квартал 1: </label>
                <input name="quarter1" type="text" class="form-control" placeholder="Квартал 1"
                       value="{{$to_change->quarter1}}">
            </div>
        </div>

        <div style="padding: 17px" class="row">
            <div class="col-sm-4">
                <label class="control-label">Квартал 2: </label>
                <input name="quarter2" type="text" class="form-control" placeholder="Квартал 2"
                       value="{{$to_change->quarter2}}">
            </div>
        </div>

        <div style="padding: 17px" class="row">
            <div class="col-sm-4">
                <label class="control-label">Квартал 3: </label>
                <input name="quarter3" type="text" class="form-control" placeholder="Квартал 3"
                       value="{{$to_change->quarter3}}">
            </div>
        </div>

        <div style="padding: 17px" class="row">
            <div class="col-sm-4">
                <label class="control-label">Квартал 4: </label>
                <input name="quarter4" type="text" class="form-control" placeholder="Квартал 4"
                       value="{{$to_change->quarter4}}">
            </div>
        </div>

        <div style="padding: 10px" class="row">
            <textarea name="message" class="form-control" rows="3" placeholder="Повідомлення"></textarea>
        </div>


        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <button type="submit" class="btn btn-primary">Відправити</button>
    </form>

@endsection
