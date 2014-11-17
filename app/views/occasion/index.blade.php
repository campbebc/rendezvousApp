@extends('base')
 
@section('content')
    @foreach ($occasions as $occasion)
        <h2>{{ $occasion->name }}</h2>
        <p>{{ $occasion->description }}</p>
        <p>{{ $occasion->location }}</p>
        <p>{{ $occasion->time }}</p>
    @endforeach
@stop