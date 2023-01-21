@extends('layouts.main')

@section('title', 'create')

@section('content')

    create

    @include('helpers.alert_error')

    <form action="{{ route('users.store') }}" method="post">
        @include('users._partials.form')

    </form>


@endsection
