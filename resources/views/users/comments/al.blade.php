@extends('layouts.main')

@section('title', 'All')

@section('content')

    <ul>
        @foreach ($comments as $comment)
            <li> {{ $comment }} </li>
        @endforeach
    </ul>



@endsection
