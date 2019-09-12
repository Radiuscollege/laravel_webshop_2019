
<ul>
@foreach($products as $product)
  <li> <a href="{{ route('products.show', $product->id ) }}"> {{ $product->naam }}  </a>   </li>
@endforeach
</ul>

<a href="{{ route('products.create') }}">CREATE</a>