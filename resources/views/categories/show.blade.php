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
    
    <h1> {{ $category->name }} </h1>
    <p> {{ $category->description }} </p>
    
    <a href="{{ route('categories.edit', $category->id) }}">EDIT</a>
    <form method="POST" action="{{ route('categories.destroy', $category->id) }}">
      @csrf
      @method('DELETE')

      <input type="submit" value="DELETE">
    </form>

</body>
</html>