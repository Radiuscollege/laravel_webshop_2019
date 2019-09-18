@extends('app')

  @section('content')
    Dit is de detail page
    
    <h1> {{ $product->naam }} </h1>
    <p> {{ $product->prijs }} </p>
        
    <a href="{{ route('products.edit', $product->id) }}">EDIT</a>
    <form method="POST" action="{{ route('products.destroy', $product->id) }}">
      @csrf
      @method('DELETE')

      <input type="submit" value="DELETE">
    </form>
  @endsection