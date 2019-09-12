<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create Product</h1>
    <form action="{{ route('products.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name">
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" name="price" id="">
        </div>

         <div class="form-group">
            <label for="categorie">Category</label>
            <select name="categorie_id" id="">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}"> {{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <input type="submit" value="Create Product">
        </div>
    </form>
</body>
</html>