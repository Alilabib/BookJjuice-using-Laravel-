<!DOCTYPE html>
<html>
<head>
    <title>ADD Product </title>
</head>
    <body>
        <form action="/edit/{{$product->id}}" method="post">
            {{csrf_field()}}
            <label for="name">Product Name </label>
            <input type="text" id="name" name="name" value="{{$product->name}}" placeholder="Enter Product name"> <br><br>
            <label for="name">Product Price </label>
            <input type="text" id="price" name="price" value="{{$product->price}}" placeholder="Enter Price"><br>
            <br>

            <input type="submit" id="submit" value="Edit">
        </form>

    </body>
</html>
