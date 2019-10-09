@extends('app')

  @section('content')
    Dit is de detail page
    
    <h1> {{ $category->name }} </h1>
    <p> {{ $category->description }} </p>
    <h4>Producten</h4>
    <ul class="list-group">
        @foreach( $category->products as $product )
            <li class="list-group-item list-group-item-dark"><a href="{{ route('products.show', $product->id)  }}">{{ $product->name }}</a></li>
        @endforeach
    </ul>

    @auth
        <a href="{{ route('categories.edit', $category->id) }}">EDIT</a>

        <form method="POST" action="{{ route('categories.destroy', $category->id) }}">
          @csrf
          @method('DELETE')

          <input type="submit" value="DELETE">
        </form>
    @endauth

  @endsection
