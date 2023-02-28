@extends('layouts.main')

@section('title', 'Create User')

@section('content')

    Create User

    @include('helpers.alert_error')

    <form action="{{ route('users.store') }}" method="post">
        @include('users._partials.form')

    </form>


@endsection
