<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style> 
        body {
            background: #fedde1;
        }
    </style>
</head>
<body>
    <h1>Dit is mijn test template</h1>
 
    @foreach($products as $product)
        <button> {{ $product }} </button>
    @endforeach
</body>
</html>