<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <form class="container my-5 w-50%" action="Index.php?controlador=usuario&accion=Guardar" method="post">

        <div class="mb-3 mt-3">
            <input type="hidden" class="form-control" id="id" placeholder="Enter id"
                value="<?php echo $usuario->id ?>" name="id">
        </div>

        <div class="mb-3 mt-3">
            <label for="Nombre" class="form-label">Nombre:</label>
            <input type="text" class="form-control" id="Nombre" placeholder="Enter Nombre"
                value="<?php echo $usuario->name ?>" name="Nombre">
        </div>

        <div class="mb-3 mt-3">
            <label for="Apellido" class="form-label">Apellido:</label>
            <input type="text" class="form-control" id="Apellido" placeholder="Enter Apellido"
                value="<?php echo $usuario->apellido ?>" name="Apellido">
        </div>

        <div class="mb-3 mt-3">
            <label for="Telefono" class="form-label">Telefono:</label>
            <input type="number" class="form-control" id="Telefono" placeholder="Enter Telefono"
                value="<?php echo $usuario->Telefono ?>" name="Telefono">
        </div>

        <div class="mb-3 mt-3">
            <label for="Edad" class="form-label">Edad:</label>
            <input type="number" class="form-control" id="Edad" placeholder="Enter Edad"
                value="<?php echo $usuario->Edad ?>" name="Edad">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</body>

</html>