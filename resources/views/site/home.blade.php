@extends('adminlte::page')

@section('title', 'Principal')

@section('content_header')
    <h1></h1>
@stop

@section('content')
@livewire('home', ['user' => Auth::user()])
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Oi!');

    </script>
@stop
