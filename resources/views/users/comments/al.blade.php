@extends('layouts.main')

@section('title', 'All')

@section('content')

<form action="{{ route('comments.al')}}" method="get"> 
    <input type="text" name="search" placeholder="Comment" >
    <button> Pesquisar </button>
    <h3>Buscar por: {{request()->input('search')}}</h3>
</form>

    <ul>
        @foreach ($comments as $comment)
            <li> {{ $comment }} </li>
        @endforeach
    </ul>



@endsection
