@extends('app')

  @section('content')
    <div class="card">
      <div class="card-body">
        <h1 class="card-title"> {{ $product->naam }} </h1>
        <p class="card-text"> {{ $product->prijs }} </p>
        <p>Categorie: {{ $product->category->name }}</p>    
        <a class="btn btn-primary" href="{{ route('products.edit', $product->id) }}">EDIT</a>
        
        <form method="POST" action="{{ route('products.destroy', $product->id) }}">
          @csrf
          @method('DELETE')

          <input class="btn btn-warning" type="submit" value="DELETE">
        </form>
      </div>
    </div>
  @endsection