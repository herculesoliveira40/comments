@extends('layouts.main')
@section('title', "Edit Comment {$comment   ->id}")

@section('content')
    Edit Comment:
    {{ $comment->id }}

    <form action="{{ route('comments.update', $comment->id) }}" method="post">
        @csrf {{-- DIRETIVA SALVAR DADOS NO BANCO --}}
        @method('PUT')

        @include('users.comments._partials.form')

   

    </form>
@endsection
