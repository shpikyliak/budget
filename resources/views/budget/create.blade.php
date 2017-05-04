@extends('layout')

@section('content')
    <h1>Створити вид бюджету</h1>
    <nav>
        <a href="#" class="btn btn-primary">Зберігти</a>

        <a style="float: right" class="btn btn-danger" href="/budget">Вийти</a>

    </nav>
    <hr>
    <h4>Головна інформація</h4>
    <div class="row">
        <div class="col-md-8">

            <input type="email" class="form-control" placeholder="Назва">
        </div>

    </div>
    <br>
    <div style="padding: 13px" class="row">
        <div class="col-md-4">
            <label>
                <input id="show-department-select" type="checkbox"> Назначити відділу
            </label>
        </div>
    </div>
    <div style="padding: 13px" class="row">
        <label class="control-label" for="article-group">Група: </label>
        <select name="department" id="article-group" class="form-control">
            <option></option>
            @foreach($departments as $department)
                <option value="{{$department->id}}">{{$department->name}}</option>
            @endforeach
        </select>
    </div>
    <div style="padding: 13px" class="row">
        <label class="control-label">Модель: </label>
        <select class="form-control">
            <option>Моя організація</option>
            <option></option>

        </select>
    </div>
    <div style="padding: 13px" class="row">
        <label class="control-label">Спосіб планування: </label>
        <select class="form-control">
            <option>На фіксований період</option>
            <option>Гнучкий період</option>
        </select>
    </div>
    <div style="padding: 13px" class="row">
        <label class="control-label">Період: </label>
        <select class="form-control">
            <option>Місяць</option>
            <option>Сезон</option>
            <option>Рік</option>
        </select>
    </div>
    <h4>Границя фактичних данних</h4>
    <div class="radio">
        <label>
            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
            Границя фактичних данних припускається всередині періода бюджету
        </label>
    </div>
    <div class="radio">
        <label>
            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
            Розміщується до початку періоду
        </label>
    </div>
@endsection