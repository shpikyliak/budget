@extends('layout')

@section('scripts')
    <script type="text/javascript" src="{{ URL::asset('js/department.js') }}"></script>
@endsection


@section('content')
    <h1>Створити вид бюджету</h1>

    <hr>
    <h4>Головна інформація</h4>
    <form method="post" action="/budget/create">

        <div class="row">
            <div class="col-md-8">

                <input type="text" class="form-control" name="name" placeholder="Назва">
            </div>
        </div>

        <div style="padding: 13px" class="row">
            <textarea class="form-control" rows="4" placeholder="Опис" name="description"></textarea>
        </div>

        <div style="padding: 13px" class="row">
            <div class="col-sm-2">
                    <input class="form-control" name="income" placeholder="Дохід"  type="text">
            </div>
            <div class="col-sm-2">
                    <input class="form-control" name="outgo" placeholder="Витрати"  type="text">
            </div>
        </div>


        <div style="padding: 13px" class="row">
            <div class="col-md-4">
                <label>
                    <input name="show-department-select" id="show-department-select" type="checkbox"> Назначити відділу
                </label>
            </div>
        </div>

        <div id="department-select" style="padding: 13px; display: none" class="row">
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
        <button type="submit" class="btn btn-primary">Зберігти</button>
    </form>
@endsection