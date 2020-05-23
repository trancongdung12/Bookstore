<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Product</title>
</head>
<body>
        <h1>Edit product</h1>
        <form action="/update" method="post">
            @csrf
            @foreach ($book as $item)
            <p>Title</p>
        <input name="title" value="{{$item->title}}" type="text">
            <p>Author</p>
            <input name="author" value="{{$item->author}}" type="text">
            <p>Price</p>
            <input name="price" value="{{$item->price}}" type="text">
            <input type="hidden" name="id" value="{{$item->id}}"  name="">
            <button>Update</button>
            @endforeach
        </form>
</body>
</html>
