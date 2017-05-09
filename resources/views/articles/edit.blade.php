@extends('layout')

@section('content')
    <h1>Редагувати статтю</h1>

    <nav>

        <a href="/budget/{{$article->budget_id}}" style="float: right" class="btn btn-danger">Вийти</a>
    </nav>

    <hr>
    <form  method="post" action="/article/{{$article->id}}/edit">
        <div class="row">
            <div class="col-md-8">
                <input name="name" type="text" class="form-control" placeholder="Назва" value="{{$article->name}}">
            </div>
        </div>

        <br>

        <div style="padding: 10px" class="row">
            <textarea name="description" class="form-control" rows="4" placeholder="Опис">{{$article->description}}</textarea>
        </div>

        <div style="padding: 10px" class="row">
            <div class="col-md-4">
                <label class="control-label" for="article-group">Тип: </label>
                <select name='type' id="article-group" class="form-control">
                    @foreach($articleTypes as $articleType)
                        @if($articleType->id == $article->type_id)
                            <option selected value="{{$articleType->id}}">{{$articleType->name}}</option>
                        @else
                            <option value="{{$articleType->id}}">{{$articleType->name}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>

        <div style="padding: 17px" class="row">
            <div class="col-sm-4">
                <input name="quarter1" type="text" class="form-control" placeholder="Квартал 1" value="{{$article->quarter1}}">
            </div>
        </div>

        <div style="padding: 17px" class="row">
            <div class="col-sm-4">
                <input name="quarter2" type="text" class="form-control" placeholder="Квартал 2" value="{{$article->quarter2}}">
            </div>
        </div>

        <div style="padding: 17px" class="row">
            <div class="col-sm-4">
                <input name="quarter3" type="text" class="form-control" placeholder="Квартал 3" value="{{$article->quarter3}}">
            </div>
        </div>

        <div style="padding: 17px" class="row">
            <div class="col-sm-4">
                <input name="quarter4" type="text" class="form-control" placeholder="Квартал 4" value="{{$article->quarter4}}">
            </div>
        </div>

        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <button type="submit" class="btn btn-success">Зберігти</button>

    </form>
@endsection