@extends('layouts.main')

@section('content')
    Listagem de Usuarios

    <a href="{{ route('users.create') }}"> +</a>
    @foreach ($users as $user)
        <li>
            {{ $user }}
        </li>
    @endforeach
@endsection
