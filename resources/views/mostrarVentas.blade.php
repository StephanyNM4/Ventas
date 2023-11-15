<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Ventas</title>
</head>
<body>
    <h1>Mostrar ventas</h1>

    <table class="table">
    <thead>
        <tr>
            <th scope="col">Codigo producto</th>
            <th scope="col">cantidad</th>
            <th scope="col">subtotal</th>
            <th scope="col">isv</th>
            <th scope="col">total</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($ventas as $venta)
        <tr>
            <th scope="row">{{ $venta->codigoProducto }}</th>
            <td>{{ $venta->cantidad }}</td>
            <td>L. {{ $venta->subtotal }}</td>
            <td>L. {{ $venta->isv }}</td>
            <td>L. {{ $venta->total }}</td>

            <!-- <td>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                comprar
            </button>
            </td> -->
        </tr>
        @endforeach

        <a href="{{ route('producto.crear') }}" class="btn btn-primary">Agregar producto</a>
        <a href="{{ route('venta.inicio') }}" class="btn btn-success">Mostrar ventas</a>
        <a href="{{ route('venta.crear') }}" class="btn btn-primary">Comprar</a>



    </tbody>
    </table>

</body>
</html>