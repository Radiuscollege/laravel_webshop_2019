@extends('app')

@section('content')
  <ul>
  @foreach($products as $product)
    <li> <a href="{{ route('products.show', $product->id ) }}"> {{ $product->name }}  </a>   </li>
  @endforeach
  </ul>

  <a href="{{ route('products.create') }}">CREATE</a>
@endsection
