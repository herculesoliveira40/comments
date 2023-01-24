@extends('layouts.main')
@section('title', "Edit {$user->id }")

@section('content')
    Edit User:
    {{ $user->id }}

    <form action="{{ route('users.update', $user->id) }}" method="post">
        @csrf {{-- DIRETIVA SALVAR DADOS NO BANCO --}}
        @method('PUT')

        <input type="text" name="name" id="name" value="{{ $user->name }}">
        <input type="email" name="email" id="email" value="{{ $user->email }}">
        <input type="password" name="password" id="password" value="{{ $user->password }}">

        <button type="submit">
            Salvar
        </button>

    </form>
@endsection
