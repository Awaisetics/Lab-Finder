@extends('layouts.app')
@section('title','Admin Dashboard')
@section('content')
@if (Session::get('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
@endif
    <div class="jumbotron bg-primary" style="height:50vh" >
        <h3 class="text-white">Welcome To Dashboard</h3>
    </div>
@endsection