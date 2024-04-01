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
    <div class="container mt-5 col-md-6 text-center">
        <form action="{{route('products.store')}}" method = "POST">
            @csrf
            <div class= "form-group">
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class= "form-group">
                <label for="descripcion">Descripcion</label>
                <input type="text" name="descri" id="descri" class="form-control">
            </div>
            <div class= "form-group">
                <label for="price">Precio</label>
                <input type="text" name="price" id="price" class="form-control">
            </div>
    
</body>
</html>