@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">@yield('header')</h1>
@stop

@section('content')
    @yield('content')
@stop

@section('footer')
    <div class="float-right d-none d-sm-block">
        <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2024 <a href="#">Actividad 11</a>.</strong> All rights reserved.
@stop
