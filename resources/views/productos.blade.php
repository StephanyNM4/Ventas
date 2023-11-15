<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Productos</title>
</head>
<body>
    <h1>Productos</h1>

    <table class="table">
    <thead>
        <tr>
            <th scope="col">Codigo producto</th>
            <th scope="col">nombre</th>
            <th scope="col">precio</th>
            <th scope="col">stock</th>
            <!-- <th scope="col">comprar</th> -->

        </tr>
    </thead>
    <tbody>
        @foreach ($productos as $producto)
        <tr>
            <th scope="row">{{ $producto->codigoProducto }}</th>
            <td>{{ $producto->nombre }}</td>
            <td>{{ $producto->precio }}</td>
            <td>{{ $producto->stock }}</td>
            <td>
            <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"> -->
                <!-- comprar -->
            </button>
            </td>
        </tr>
        @endforeach

        <a href="{{ route('producto.crear') }}" class="btn btn-primary">Agregar producto</a>
        <a href="{{ route('venta.inicio') }}" class="btn btn-success">Mostrar ventas</a>
        <a href="{{ route('venta.crear') }}" class="btn btn-primary">Comprar</a>



    </tbody>
    </table>

</body>
</html>