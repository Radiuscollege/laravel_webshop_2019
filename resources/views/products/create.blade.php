@extends('app')
    @section('content')
    <h1>Create Product</h1>
    <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input class="form-control" type="text" name="name">
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input class="form-control" type="text" name="price" id="">
        </div>

         <div class="form-group">
            <label for="categorie">Category</label>
            <select class="form-control" name="categorie_id" id="">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}"> {{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="image">Image</label>
            <input class="form-control-file" type="file" name="image" id="image" >
        </div>

        <div class="form-group">
            <input class="btn btn-primary" type="submit" value="Create Product">
        </div>
    </form>
    @endsection
