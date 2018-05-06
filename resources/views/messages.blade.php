@extends('layouts.app')
@section('content')
    @if(count($messages) > 0)
        @foreach($messages as $message)
            <ul class="list-group">
                <li class="list-group-item">
                    {{$message->name}}
                </li>
                <li class="list-group-item">
                    {{$message->email}}
                </li>
                <li class="list-group-item">
                    {{$message->message}}
                </li>
                <br>

            </ul>
        @endforeach
    @endif
@endsection
