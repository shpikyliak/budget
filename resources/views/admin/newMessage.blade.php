@extends('layout')
@section('content')

    <nav>
        <a style="float: right" href="/admin/messages/{{$article->id}}/history" class="btn btn-primary">Переглянути
            історію</a>
    </nav>
    <br>
    <hr>


    <div>
        <h4>Стаття: {{$article->name}}</h4>

        <h5> Опис:</h5>
        <p style="padding: 20px">{{$article->description}}</p>

        <h5>Бюджет: {{$article->budget->department->name}}</h5>

        <h5>Тип: {{$article->type->name}}</h5>

        <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
        {{$article->updated_at}}
    </div>


    <div>
        <form method="post" action="/article/{{$article->id}}/send-message">
            <div style="padding: 17px" class="row">
                <div class="col-sm-4">
                    <label class="control-label">Квартал 1: </label>
                    <input name="quarter1" type="text" class="form-control" placeholder="Квартал 1"
                           value="{{$article->quarter1}}">
                </div>
            </div>

            <div style="padding: 17px" class="row">
                <div class="col-sm-4">
                    <label class="control-label">Квартал 2: </label>
                    <input name="quarter2" type="text" class="form-control" placeholder="Квартал 2"
                           value="{{$article->quarter2}}">
                </div>
            </div>

            <div style="padding: 17px" class="row">
                <div class="col-sm-4">
                    <label class="control-label">Квартал 3: </label>
                    <input name="quarter3" type="text" class="form-control" placeholder="Квартал 3"
                           value="{{$article->quarter3}}">
                </div>
            </div>

            <div style="padding: 17px" class="row">
                <div class="col-sm-4">
                    <label class="control-label">Квартал 4: </label>
                    <input name="quarter4" type="text" class="form-control" placeholder="Квартал 4"
                           value="{{$article->quarter4}}">
                </div>
            </div>

            <div style="padding: 10px" class="row">
                <textarea name="message" class="form-control" rows="3" placeholder="Повідомлення"></textarea>
            </div>


            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <button type="submit" class="btn btn-primary">Відправити</button>
        </form>
    </div>
@endsection