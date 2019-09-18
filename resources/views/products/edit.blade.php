@extends('app')
    @section('content')
    <h1>Edit Product</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="">name</label>
            <input name="name" type="text" value="{{$product->naam}}">
        </div>

        <div class="form-group">
            <label for="">price</label>
            <input type="text" name="price" value="{{ $product->prijs }}" id=""> 
       </div>

        <div class="form-group">
            <label for="">categorie</label>
            <select name="categorie_id" id="">
                @foreach($categories as $category)
                    <option value="{{$category->id}}"> {{ $category->name }}</option>
                @endforeach
            </select>
       </div>
        <input type="submit" value="Edit category">
    </form>
    @endsection