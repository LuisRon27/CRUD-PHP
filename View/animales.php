<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Animales</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <div class="container my-5 d-column justify-content-center align-items-center">
        <h1>Animales</h1>
        <a href="Index.php?controlador=animal&accion=MostrarAnimal" class="btn btn-primary" title="New">
            New
        </a>
        <a href="index.html" class="btn btn-secondary">Volver</a>
    </div>
    <table class="table container my-5 table-striped">
        <thead class="table-dark">
            <tr>
                <?php require_once("core/constantes.php");
                foreach (animalColumms as $value): ?>
                    <th>
                        <?php echo $value; ?>
                    </th>
                <?php endforeach; ?>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($animales as $animal): ?>
                <tr>
                    <td>
                        <?php echo $animal->id ?>
                    </td>
                    <td>
                        <?php echo $animal->Nombre ?>
                    </td>
                    <td>
                        <?php echo $animal->Raza ?>
                    </td>
                    <td>
                        <?php echo $animal->Sexo ?>
                    </td>
                    <td>
                        <?php echo $animal->Color ?>
                    </td>
                    <td>
                        <?php echo $animal->Edad ?>
                    </td>
                    <td>
                        <a href="Index.php?controlador=animal&accion=MostrarAnimal&id=<?php echo $animal->id ?>"
                            class="btn btn-warning" title="Edit">
                            <i class="bi bi-pencil-square"></i>
                        </a>



                    </td>
                    <td>
                        <a href="Index.php?controlador=animal&accion=Eliminar&id=<?php echo $animal->id ?>"
                            onclick="return confirm('¿Seguro deseas eliminar?')" class="btn btn-danger" title="Delete">
                            <i class="bi bi-trash3"></i>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>