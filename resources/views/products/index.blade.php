<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>
</head>
<body>
    <h1>Product</h1>
<div>
    <table border="1">
        <tr>
            <td>id</td>
            <td>name</td>
            <td>Quantity</td>
            <td>Pdice</td>
            <td>Descdiption</td>
            <td>Date</td>
            <td>Edit</td>
            <td>Action</td>
        </tr>
        @foreach ($products as $product)
        <tr>
        <td>{{$product->id}}</td>
        <td>{{$product->name}}</td>
        <td>{{$product->qty}}</td>
        <td>{{$product->price}}</td>
        <td>{{$product->description}}</td>
        <td>{{$product->created_at}}</td>
        <td>
            <a href="{{route('product.edit', ['product'=> $product])}}">Edit</a><td>
                <td>
                    <form method="post" action="{{route('product.destroy',['product' => $product])}}">
                        @csrf 
                        @method('delete')
                        <input type="submit" value="Delete">
                    </form>
                </td>
    </tr>            
        @endforeach
    </table>
</div>
</body>
</html>