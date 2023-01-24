@extends('layouts.main')

@section('title', 'create Coment user')

@section('content')

    create Comment

    @include('helpers.alert_error')

    <form action="{{ route('comments.store', $user->id) }}" method="post">
        @include('users.comments._partials.form')

    </form>


@endsection
