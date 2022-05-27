@extends('adminlte::page')

@section('title', 'Coders Free')

@section('content_header')
    <h1>Show post list</h1>
@stop

@section('content')
    @livewire('admin.posts-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop