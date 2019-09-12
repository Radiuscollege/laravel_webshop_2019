
<ul>
@foreach($categories as $category)
  <li> <a href="{{ route('categories.show', $category->id ) }}"> {{ $category->name }}  </a>   </li>
@endforeach
</ul>

<a href="{{ route('categories.create') }}">CREATE</a>