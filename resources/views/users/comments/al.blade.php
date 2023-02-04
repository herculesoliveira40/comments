@extends('layouts.main')

@section('title', 'All')

@section('content')

<div class="container">
    <form action="{{ route('comments.al')}}" method="get"> 
        <input type="text" name="search" placeholder="Comment" >
        <button> Pesquisar </button>
        <h3>Buscar por: {{request()->input('search')}}</h3>
    </form>
</div>
    <ul>
        @foreach ($comments as $comment)
            <li> {{ $comment }} </li>
        @endforeach
    </ul>



@endsection
