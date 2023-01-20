@extends('layouts.main')
@section('title', 'Show user')

@section('content')
    Show User:
    {{ $user->id }}


@endsection
