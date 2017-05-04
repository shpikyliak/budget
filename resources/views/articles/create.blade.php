@extends('layout')

@section('content')

    <h1>Створити статтю бюджету</h1>

    <nav>

        <button style="float: right" class="btn btn-danger">Вийти</button>
    </nav>

    <hr>
<form  method="post" action="/budget/{{$id}}/add-article">
    <div class="row">
        <div class="col-md-8">
            <input name="name" type="text" class="form-control" placeholder="Назва">
        </div>
    </div>

    <br>

    <div style="padding: 10px" class="row">
        <textarea name="description" class="form-control" rows="4" placeholder="Опис"></textarea>
    </div>

    <div style="padding: 10px" class="row">
        <div class="col-md-4">
            <label class="control-label" for="article-group">Тип: </label>
            <select name='type' id="article-group" class="form-control">
                <option value="1">Дохід</option>
                <option value="2">Видаток</option>
            </select>
        </div>
    </div>

    <div style="padding: 17px" class="row">
        <div class="col-sm-4">
            <input name="quarter1" type="text" class="form-control" placeholder="Квартал 1">
        </div>
    </div>

    <div style="padding: 17px" class="row">
        <div class="col-sm-4">
            <input name="quarter2" type="text" class="form-control" placeholder="Квартал 2">
        </div>
    </div>

    <div style="padding: 17px" class="row">
        <div class="col-sm-4">
            <input name="quarter3" type="text" class="form-control" placeholder="Квартал 3">
        </div>
    </div>

    <div style="padding: 17px" class="row">
        <div class="col-sm-4">
            <input name="quarter4" type="text" class="form-control" placeholder="Квартал 4">
        </div>
    </div>

    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <button type="submit" class="btn btn-success">Зберігти</button>

</form>

@endsection