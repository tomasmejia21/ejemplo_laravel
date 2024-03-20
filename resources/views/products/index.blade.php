<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
    {{ $products }}
    <form action="{{ route('products.store') }}" method="post">
        @csrf
        <label for="">Ingrese el nombre del producto:
            <input type="text" name="product_name" placeholder="Ingrese el nombre del producto" >
        </label>
        <br>
        <label for="">Ingrese el precio del producto:
            <input type="number" step="0.5" name="product_price" placeholder="Ingrese el precio del producto">
        </label>
        <br>
        <label for="">Ingrese el stock del producto:
            <input type="number" name="product_stock" placeholder="Ingrese el stock del producto">
        </label>
        <br>
        <button type="submit">Enviar</button>
    </form>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->stock }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>