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
    <form class="container my-5 w-50%" action="Index.php?controlador=animal&accion=Guardar" method="post">

        <div class="mb-3 mt-3">
            <input type="hidden" class="form-control" id="id" placeholder="Enter id"
                value="<?php echo $animal->id ?>" name="id">
        </div>

        <div class="mb-3 mt-3">
            <label for="Nombre" class="form-label">Nombre:</label>
            <input type="text" class="form-control" id="Nombre" placeholder="Enter Nombre"
                value="<?php echo $animal->Nombre ?>" name="Nombre">
        </div>

        <div class="mb-3 mt-3">
            <label for="Raza" class="form-label">Raza:</label>
            <input type="text" class="form-control" id="Raza" placeholder="Enter Raza"
                value="<?php echo $animal->Raza ?>" name="Raza">
        </div>

        <div class="mb-3 mt-3">
            <label for="Sexo" class="form-label">Sexo:</label>
            <input type="text" class="form-control" id="Sexo" placeholder="Enter Sexo"
                value="<?php echo $animal->Sexo ?>" name="Sexo">
        </div>
        
        <div class="mb-3 mt-3">
            <label for="Color" class="form-label">Color:</label>
            <input type="text" class="form-control" id="Color" placeholder="Enter Color"
                value="<?php echo $animal->Color ?>" name="Color">
        </div>

        <div class="mb-3 mt-3">
            <label for="Edad" class="form-label">Edad:</label>
            <input type="number" class="form-control" id="Edad" placeholder="Enter Edad"
                value="<?php echo $animal->Edad ?>" name="Edad">
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</body>

</html>