<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AddProduct</title>
</head>
<body>
        <h1>Add product</h1>
        <form action="/" method="post">
            @csrf
            <p>Title</p>
            <input name="title" type="text">
            <p>Author</p>
            <input name="author" type="text">
            <p>Price</p>
            <input name="price" type="text">
            <button>Add</button>
        </form>
</body>
</html>
