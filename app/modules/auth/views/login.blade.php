@extends('content::_layout.login')

@section('main')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        {{ Form::open(array('route' => 'login.post')) }}
        <h2>Login</h2>
        <hr>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" id="email" name="email" class="form-control">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Login</button>

        {{ Form::close() }}
    </div>
</div>
@stop