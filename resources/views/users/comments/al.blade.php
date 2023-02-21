@extends('layouts.main')

@section('title', 'All')

@section('content')
    <h1> Todos Comentarios </h1>
    <div class="container">
        <form action="{{ route('comments.al') }}" method="get">
            <input type="text" name="search" placeholder="Comment">
            <button> Pesquisar </button>
            <h3 class="text-warning">Buscar por: {{ request()->input('search') }}</h3>
        </form>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>description</th>
                <th>visible</th>
                <th>user_id</th>
                <th>created_at</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($comments as $comment)
                <tr>
                    <td> {{ $comment['id'] }} </td>
                    <td> {{ $comment['description'] }} </td>
                    <td> {{ $comment['visible'] }} </td>
                    <td> {{ $comment['user_id'] }} </td>
                    <td> {{ $comment['created_at'] }} </td>
                </tr>
            @endforeach
        <tbody>
    </table>



@endsection
