@extends('app')

  @section('content')
    Dit is de detail page
    
    <h1> {{ $category->name }} </h1>
    <p> {{ $category->description }} </p>
    
    <a href="{{ route('categories.edit', $category->id) }}">EDIT</a>
    <form method="POST" action="{{ route('categories.destroy', $category->id) }}">
      @csrf
      @method('DELETE')

      <input type="submit" value="DELETE">
    </form>

  @endsection