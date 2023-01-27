@extends('layouts.main')
@section('title', "users ")

@section('content')
    <h1>
        Listagem de Usuarios
        <a href="{{ route('users.create') }}"> +</a>
    </h1>

    <form action="{{ route('users.index')}}" method="get"> 
        <input type="text" name="search" placeholder="Name or email of Search" >
        <button> Pesquisar </button>
        <h3>Buscar por: {{request()->input('search')}}</h3>
    </form>
    
    @foreach ($users as $user)
        <li>
            {{ $user }}
            <a href="{{ route('users.edit', $user->id) }}"> E </a>

            <a href="{{ route('users.show', $user->id) }}"> S </a>

            <!-- Button trigger modal -->
            <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal"
                data-id="{{ $user->id }}">
                <i class="bi bi-trash3-fill"></i> X
            </a>
            <!-- Modal -->
            <form id="delete" action="{{ route('users.delete', $user->id) }}" method="POST">
                @csrf
                @method('DELETE')
                @include('helpers.delete_modal')
            </form>
            <a href="{{ route('comments.user.index', $user->id) }}"> 
                Quantidade {{ $user->commentsUser->count() }}
            </a>
        </li>
    @endforeach 

    <div> 
        {{ $users->appends([
            'search' => request()->get('search', '')
        ])->links('pagination::bootstrap-5') }}   <!-- underfly OR Provider= Paginator::useBootstrapFive(); -->  
    </div>    
@endsection
