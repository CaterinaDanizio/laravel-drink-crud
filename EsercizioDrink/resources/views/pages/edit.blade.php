@extends('layouts.main-layout')

@section('content')
    <h2>Modifica</h2>

        <form action="{{ route('update', $drink ->id)}}" method="POST">

        @csrf
        @method('POST')

        <label for="name">Nome</label>
        <input name="name" type="text" value="{{$drink ->name}}">
        <br>

        <label for="alcohol_content">Gradazione alcolica</label>
        <input name="alcohol_content" type="text" value="{{$drink ->alcohol_content}}">
        <br>

        <label for="Price">Prezzo</label>
        <input name="price" type="text" value="{{$drink ->price}}">
        <br>

        <input type="submit" value="CREATE">
 </form>
    
@endsection