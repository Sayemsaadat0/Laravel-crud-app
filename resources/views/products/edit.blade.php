<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit A Product</title>
</head>
<body>
    <h1>Edit A Product</h1>
    <div>
        @if (session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif 
        <div>
            nothing happeded
        </div>
    </div>
    
    <form method="post" action="{{route('product.update',['product'=> $product])}}"> 
        @csrf 
        @method('put') 
        <div> 
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Name"  value="{{$product->name}}"/>
        </div>
        <div> 
            <label for="qty">Quantity</label>
            <input type="number" name="qty" placeholder="Quantity" value="{{$product->qty}}" />
        </div>
        <div> 
            <label for="price">Price</label>
            <input type="text"  name="price" placeholder="Price"  value="{{$product->price}}"/>
        </div>
        <div> 
            <label for="description">Description</label>
            <input type="text" name="description" placeholder="Description" value="{{$product->description}}"/>
        </div>
        <div>
            <input type="submit" value="Update Products">
        </div>
    </form>
</body>
</html>