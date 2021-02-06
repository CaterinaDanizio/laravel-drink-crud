@extends('layouts.main-layout')

@section('content')
    <h3>{{ $drink->name}}</h3>
    <h4>Gradazione alcolica: {{ $drink->alcohol_content }} gradi</h4>
    <h4>Prezzo: {{ $drink->price }} euro</h4>

    <button> <a href="{{ route('index')}}">Torna in HOME</a></button>
    
@endsection