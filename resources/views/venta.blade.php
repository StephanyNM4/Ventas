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

    <form method="POST" action=" {{ route( 'venta.guardar') }} ">
        @csrf
        @method('POST')

        <div class="mb-3">
            <label for="codigoProducto" class="form-label">Codigo producto </label>
            <input type="text" class="form-control" id="codigoProducto" name="codigoProducto">
        </div>

        <div class="mb-3">
            <label for="cantidad" class="form-label">Cantidad producto </label>
            <input type="text" class="form-control" id="cantidad" name="cantidad">
        </div>
            
        <button type="submit" class="btn btn-primary">Comprar</button>
        <a href="{{ route( 'producto.inicio' ) }}">Regresar</a>
    </form>

    

</body>
</html>