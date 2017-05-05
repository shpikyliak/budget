@extends('layout')

@section('content')

    <h4>Відділ: {{$message->department}}</h4>

    <p class="bg-warning message-text">{{$message->message}}</p>

    <h5>Стаття: {{$message->article}}</h5>

    <p><b>Дата:</b> {{$message->created_at}}</p>
    <form method="post" action="admin/message/{{$message->id}}/sendAnswer">
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
