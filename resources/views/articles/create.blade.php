@extends('layout')

@section('content')
    <h1>Створити статтю бюджету</h1>
    <nav>
        <a href="#" class="btn btn-primary">Зберігти</a>

        <button style="float: right" class="btn btn-danger">Вийти</button>

    </nav>
    <hr>
    <h4>Головна інформація</h4>
    <div class="row">
        <div class="col-md-8">

            <input type="email" class="form-control"  placeholder="Назва">
        </div>
        <div class="col-md-4">

            <input type="email" class="form-control"  placeholder="Код">
        </div>
    </div>
    <br>
    <div style="padding: 10px" class="row">

        <textarea class="form-control" rows="4" placeholder="Опис"></textarea>
    </div>
    <div style="padding: 10px" class="row">
        <label class="control-label" for="article-group">Група: </label>
        <select id="article-group" class="form-control">
            <option></option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
    </div>

    <h4>Види аналітик</h4>


    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">Аналітика 1</label>

                <select class="form-control">
                    <option></option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
            </div>

        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class=" control-label">Аналітика 2</label>

                <select class="form-control">
                    <option></option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">Аналітика 3</label>

                <select class="form-control">
                    <option></option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
            </div>

        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class=" control-label">Аналітика 4</label>

                <select class="form-control">
                    <option></option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">Аналітика 5</label>

                <select class="form-control">
                    <option></option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
            </div>

        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class=" control-label">Аналітика 6</label>

                <select class="form-control">
                    <option></option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
            </div>

        </div>
    </div>
@endsection