@extends('layouts.mylayout')

@section('content')
    Welcome, {{ session('name') }} [{{ session('email') }}]
@endsection