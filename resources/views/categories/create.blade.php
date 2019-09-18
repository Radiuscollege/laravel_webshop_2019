@extends('app')
    @section('content')
        <h1>Create Category</h1>
        <form action="{{ route('categories.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description"></textarea>
            </div>

            <div class="form-group">
                <input type="submit" value="Create Category">
            </div>
        </form>
    @endsection
