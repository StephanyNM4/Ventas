<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar producto</title>
</head>
<body>
    <h1>Agregar producto</h1>

    <form method="POST" action= "{{  route('producto.store') }}">
        @csrf
        @method('POST')
        
    <div class="mb-3">
        <label for="codigoProducto" class="form-label">Codigo producto </label>
        <input type="text" class="form-control" id="codigoProducto" name="codigoProducto">
    </div> <br><br>

    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre </label>
        <input type="text" class="form-control" id="nombre" name="nombre">
    </div><br><br>

    <div class="mb-3">
        <label for="precio" class="form-label">Precio </label>
        <input type="text" class="form-control" id="precio" name="precio">
    </div><br><br>

    <div class="mb-3">
        <label for="stock" class="form-label">Stock</label>
        <input type="text" class="form-control" id="stock" name="stock">
    </div><br><br>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route( 'producto.inicio' ) }}">Regresar</a>
    </form>
</body>
</html>