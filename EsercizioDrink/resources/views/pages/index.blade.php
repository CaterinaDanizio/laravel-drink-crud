@extends('layouts.main-layout')

@section('content')
    <h1>Lista cocktails</h1>
    <div class="flex">
        <div class="container-list">
        <button><a href="{{ route('create') }}">CREA UN NUOVO COCKTAIL</a></button>
    <ul>
        @foreach ($drinks as $drink)
            
            <li> 
                <a href="{{ route('show', $drink -> id)}}">{{ $drink->name }}</a>
                <a href="{{ route('edit', $drink -> id) }}">
                    <i class="fa fa-pencil" aria-hidden="true"></i>
                </a>
                <a href="{{ route('delete', $drink -> id) }}">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                </a>       
            </li>
            
            
        @endforeach
    </ul>
    </div>
    </div>
    
@endsection