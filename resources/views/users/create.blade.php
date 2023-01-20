@extends('layouts.main')

@section('title', 'create')

@section('content')

    create

    @if ($errors->any())
        <ul class="errors">
            @foreach ($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    @endif
    
    <form action="{{ route('users.store') }}" method="post">
        @csrf {{-- DIRETIVA SALVAR DADOS NO BANCO --}}

        <input type="text" name="name" id="name" value="{{ old('name') }}">
        <input type="email" name="email" id="email" value="{{ old('email') }}">
        <input type="password" name="password" id="password" value="{{ old('password') }}">

        <button type="submit">
            Salvar
        </button>

    </form>


@endsection
