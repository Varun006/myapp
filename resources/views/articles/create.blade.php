@extends('include')

@section('content')
    <h1>Write a new article</h1>

    <hr>

    {!! Form::open(['url' => 'articles']) !!}
       @include('articles.partials.form' , ['submitButton' => 'Create Article'])
    {!! Form::close() !!}

    @include('errors.list');
@stop