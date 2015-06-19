@extends('include')

@section('content')
    <h1>About me</h1>

    <ul>
        @foreach($people as $person)
            <li>{{$person}}</li>
        @endforeach
    </ul>
    <p>
        Some text Some text Some text Some text Some text Some text Some text Some text Some text Some text Some text Some text Some text Some text Some text
    </p>
@stop