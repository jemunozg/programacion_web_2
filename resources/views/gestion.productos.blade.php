<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container text-center">
        <a href= "{{route('productos_create')}}">
            <button class="btn btn-success btn-block">Crear</button>
        </a>
        <br><br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($productos as $producto)
                    <tr>
                        <td>{{$producto->id}}</td>
                        <td>{{$producto->nombre}}</td>
                        <td>{{$producto->descripcion}}</td>
                        <td>{{$producto->precio}}</td>
                    <a href="{{route('productos.edit',$producto->id)}}" class="btn btn-primary">
                        <i class="bi bi-pencil-fill"></i>
                    </a>
                    <form action="{{route('productos.destroy',$producto->id)}}" class="post">
                      @method("DELETE")
                      @csrf
                      <button type="submit" class="btn btn-danger">
                        <i class="bi bi-trash-fill"></i>
                      </button>
                    </form>
                    </tr>    
                   @endforeach
               </tbody>
           </table>
     </div>
</body>
</html>