@extends('app')

@section('content')
    <h4>Products</h4>
  <ul>
  @foreach($products as $product)
    <li> <a href="{{ route('products.show', $product->id ) }}"> {{ $product->name }}  </a>   </li>
  @endforeach
  </ul>
  {{$products->links()}}

  <a href="{{ route('products.create') }}">CREATE</a>
@endsection
