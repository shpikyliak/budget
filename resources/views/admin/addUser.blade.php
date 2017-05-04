@extends('layout')
@section('content')
    <h1>Створити корчистувача</h1>

    <form method="post" action="/admin/add-user">

        <div  style="padding: 13px;" class="row">
            <div class="col-md-8">
                <input type="text" class="form-control" name="name" placeholder="Ім'я">
            </div>
        </div>

        <div  style="padding: 13px;" class="row">
            <div class="col-md-8">
                <input type="email" class="form-control" name="email" placeholder="Емейл">
            </div>
        </div>

        <div id="department-select" style="padding: 13px;" class="row">
            <label class="control-label" for="article-group">Тип користувача: </label>
            <select name="department" id="article-group" class="form-control">
                @foreach($usersTypes as $usersType)
                    <option value="{{$usersType->id}}">{{$usersType->name}}</option>
                @endforeach
            </select>
        </div>
        <div  style="padding: 13px;" class="row">
            <label class="control-label" for="article-group">Відділ: </label>
            <select name="department" id="article-group" class="form-control">
                <option value=""></option>
                @foreach($departments as $department)
                    <option value="{{$department->id}}">{{$department->name}}</option>
                @endforeach
            </select>
        </div>

        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <p style="color: #a0a0a0; font-size: 12px">*(Цю інформацію можна буде змінити)</p>
        <button type="submit" class="btn btn-success">Створити</button>
    </form>

    <hr>
@endsection