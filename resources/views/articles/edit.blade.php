@extends('include')

@section('content')
        <h1>{!! $article->title !!}</h1>

        {!! Form::model($article , ['method' => 'PATCH' , 'action' => ['ArticlesController@update' , $article->id]]) !!}
            @include('articles.partials.form' , ['submitButton' => 'Update Article'])
        {!! Form::close() !!}

        @include('errors.list')
@stop