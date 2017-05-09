@extends('layout')

@section('content')
    <div id="login-form">
        <form class="form-horizontal" method="post" action="/login">
            <div class="form-group">
                <label class="col-sm-2 control-label">Email</label>
                <div class="col-sm-5">
                    <input type="text" name="email" class="form-control"  placeholder="Email">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Пароль</label>
                <div class="col-sm-5">
                    <input name="password" type="password" class="form-control" placeholder="Пароль">
                </div>
            </div>

            {{ csrf_field() }}

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Війти</button>
                </div>
            </div>


        </form>

    </div>

@endsection