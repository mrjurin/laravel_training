@extends('layouts.mylayout')

@section('content')
    <form action="/login/authenticate" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control">
            <label>Password</label>
            <input type="password" name="password" class="form-control">
            <button type="submit" class="btn btn-outline-primary">
                Login
            </button>
        </div> 
    </form>
@endsection