@extends('app')
    @section('content')
    <h1>Edit Category</h1>
    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="">name</label>
            <input name="name" type="text" value="{{$category->name}}">
        </div>

        <div class="form-group">
            <label for="">description</label>
            <textarea name="description" cols="40" rows="5">{{ $category->description }}</textarea>
        </div>

        <input type="submit" value="Edit category">
    </form>
    @endsection