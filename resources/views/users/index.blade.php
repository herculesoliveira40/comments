@extends('layouts.main')

@section('content')
    Listagem de Usuarios

    <a href="{{ route('users.create') }}"> +</a>
    @foreach ($users as $user)
        <li>
            {{ $user }}
            <a href="{{ route('users.edit', $user->id) }}"> E </a>
            
            <a href="{{ route('users.show', $user->id) }}"> S </a>

            <!-- Button trigger modal -->
            <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal" data-id="{{ $user->id }}">
                <i class="bi bi-trash3-fill"></i> X
            </a>
            <!-- Modal -->
            <form id="delete" action="{{ route('users.delete', $user->id) }}" method="POST">
                @csrf
                @method('DELETE')
                @include('helpers.delete_modal')
            </form>

        </li>
    @endforeach
@endsection
