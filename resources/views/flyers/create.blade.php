@extends('layout')

@section('content')
    <h1>Selling Your Home?</h1>
    <hr>
    {!! Form::open(['method' => 'POST', 'url' => '/flyers', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data']) !!}
        @include('flyers.form')

        <div class="btn-group pull-right">
            {!! Form::reset("Reset", ['class' => 'btn btn-warning']) !!}
            {!! Form::submit("Create Flyer", ['class' => 'btn btn-success']) !!}
        </div>
    {!! Form::close() !!}
@stop