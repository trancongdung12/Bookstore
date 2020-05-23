<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <h1>Book Store</h1>
    <form action="/addproduct" >
    <button>Add Product</button>
    </form>
    <div>
        @foreach ($books as $item)
        <div class="item">
                <img src="" alt="">
                <p>Title: {{$item->title}}</p>
                <p>Author:{{$item->author}}</p>
                <p>Price: {{$item->price}}<span>$</span></p>
                <form action="/edit/{{$item->id}}" method="POST" >
                    @csrf
                <button>Edit</button>
                </form>
                <form action="/delete/{{$item->id}}" method="POST" >
                    @csrf
                <button>Delete</button>
                </form>
        </div>
        @endforeach
    </div>
</body>
</html>
