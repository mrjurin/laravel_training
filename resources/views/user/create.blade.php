@extends('layouts.mylayout')

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/user/store" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Email</label>
            <input type="text" name="email">

            @error('email')
                <span class="text-danger">*</span>
            @enderror
        </div>

        <div class="form-group">
            <label>Name</label>
            <input type="text" name="full_name">

            @error('full_name')
                {{ $message }}
            @enderror
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password">

            @error('password')
                {{ $message }}
            @enderror
        </div>
        <div class="form-group">
            <label>Confirm Password</label>
            <input type="password" name="password_confirmation">
            @error('password_confirmation')
                {{ $message }}
            @enderror
        </div>

        <button type="submit" class="btn btn-outline-secondary">
            Create User
        </button>
    </form>
@endsection