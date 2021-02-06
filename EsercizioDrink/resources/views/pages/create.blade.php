@extends('layouts.main-layout')

@section('content')
    <h2>Crea un nuovo cocktail</h2>

        <form action="{{ route('store')}}" method="POST">

        @csrf
        @method('POST')

        <label for="name">Nome</label>
        <input name="name" type="text">
        <br>

        <label for="alcohol_content">Gradazione alcolica</label>
        <input name="alcohol_content" type="text">
        <br>

        <label for="Price">Prezzo</label>
        <input name="price" type="text">
        <br>

        <input type="submit" value="CREATE">
 </form>
    
@endsection