@extends('layouts.main')

@section('title', "Comment {$user->name}")

@section('content')
    <h1>
        Index Comment {{$user->name}}
        
            <a href="{{ route('comments.create', $user->id) }}"> +</a>
        
    </h1>
    <p> Conteudo </p>
    <p> Visivel </p>

@endsection