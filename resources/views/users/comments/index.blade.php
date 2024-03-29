@extends('layouts.main')

@section('title', "Comment {$user->name}")

@section('content')
    <h1>
        Index Comment {{$user->name}}
        
            <a href="{{ route('comments.create', $user->id) }}"> +</a>
        
    </h1>
<div>
    <form action="{{ route('comments.user.index', $user->id)}}" method="get"> 
        <input type="text" name="search" placeholder="Comment" >
        <button> Pesquisar </button>
        <h3 class="text-warning">Buscar por: {{request()->input('search')}}</h3>
    </form>
</div>    
    @foreach ($comment as $commentUser)
        <li>
            {{ $commentUser }}
            <a href="{{ route('comments.edit', ['user' => $user->id, 'id' => $commentUser->id]) }}"> E </a>

            
        </li>
    @endforeach
  

@endsection