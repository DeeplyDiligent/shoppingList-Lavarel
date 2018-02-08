@extends('layouts.app')

@section('content')
<h1>Messages</h1>
@if(count($messages)>0)
    @foreach($messages as $message)
        <div class="list-group">
            <div class="list-group-item">Name: {{$message-> name}}</div>
            <div class="list-group-item">Email: {{$message-> email}}</div>
            <div class="list-group-item">Message: {{$message-> message}}</div>
        </div>
    @endforeach
@endif
@endsection