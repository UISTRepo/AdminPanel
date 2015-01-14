@extends('templates.default')
@section('title')Login
@stop
@section('content')
    @include('partials.companyInfo')
    @include('partials.infoMsg')
    @include('partials.errorMsg')
    <div class="loginForm">
        <form action="{{URL::action('login-post')}}" method="post" class="form-horizontal" role="form">
            <div class="form-group">
                <label for="inputUser" class="col-sm-offset-2 col-sm-3 control-label">User Name</label>
                <div class="col-sm-3">
                    <input required type="text" name="username" class="form-control" id="inputUser" placeholder="User Name">
                </div>
                @if($errors->has('username'))
                    {{ $errors->first('username') }}
                @endif
            </div>
            <div class="form-group">
                <label for="inputPassword" class="col-sm-offset-2 col-sm-3 control-label">Password</label>
                <div class="col-sm-3">
                    <input required type="password" name="password" class="form-control" id="inputPassword" placeholder="Password">
                </div>
                @if($errors->has('password'))
                    {{ $errors->first('password') }}
                @endif
            </div>
            <div class="form-group">
                <div class="col-sm-offset-5 col-sm-10">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember"> Remember me
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-5 col-sm-10">
                    <button type="submit" class="btn btn-primary">Log In</button>
                </div>
            </div>
            {{ Form::token() }}
        </form>
    </div>
@stop

