<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <form action="{{ route('product.store') }}"method="POST">
        @csrf
        <label>name</label>
        <input type="text" name="name">
        <br>
        <label>price</label>
        <input type="number" name="price">
        <br>
        <label>category</label>
        <select name="category">
            <option value="Electronics">Electroics</option>
            <option value="Clothes">Clothes</option>
            <option value="Accessories">Accessories</option>
        </select>
        <br>
        <label>description</label>
        <textarea name="description"></textarea>
        <br>
        <button>submit</button>
    </form>
</body>

</html>
