<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    Dit is de detail page
    
    <h1> {{ $product->naam }} </h1>
    <p> {{ $product->prijs }} </p>
        
    <a href="{{ route('products.edit', $product->id) }}">EDIT</a>
    <form method="POST" action="{{ route('products.destroy', $product->id) }}">
      @csrf
      @method('DELETE')

      <input type="submit" value="DELETE">
    </form>

</body>
</html>