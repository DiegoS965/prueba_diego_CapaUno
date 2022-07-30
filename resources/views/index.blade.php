<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra de productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <p class ="text-white">Tienda de productos</p>
    </nav>
    <form action = "{{route('order.store.Web')}}" method="post">
        @csrf
        <p class ="text">Nombre</p>
        <input type="text" name="nombre_cliente" class="form-control">
        <br>
        <button type="submit" class="btn btn-primary">Comprar</button>
        <br>
        
        <table class="table table-hover bg-light text-dark">
            <thead>
                <tr>
                    <th>Imagen</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Comprar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td class="w-25 h-25">
                            <img src="../images/{{$product->imagen}}" class="img-fluid">
                        </td>
                        <td>{{$product->nombre_producto}}</td>
                        <td>{{$product->descripcion_producto}}</td>
                        <td>{{$product->precio}}</td>
                        <td><input type="checkbox" name="{{$product->nombre_producto}}" value="{{$product->nombre_producto}}"></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
    </form>
</body>
</html>
