<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <div class="container my-5 d-column justify-content-center align-items-center">
        <h1>Clientes</h1>
        <a href="Index.php?controlador=usuario&accion=MostrarUsuario" class="btn btn-primary" title="New">
            New
        </a>
    </div>
    <table class="table container my-5 table-striped">
        <thead class="table-dark">
            <tr>
                <?php require_once("core/constantes.php");
                foreach (usuarioColumms as $value): ?>
                    <th>
                        <?php echo $value; ?>
                    </th>
                <?php endforeach; ?>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($this->consultarTodo() as $usuario): ?>
                <tr>
                    <td>
                        <?php echo $usuario->id ?>
                    </td>
                    <td>
                        <?php echo $usuario->Nombre ?>
                    </td>
                    <td>
                        <?php echo $usuario->Apellido ?>
                    </td>
                    <td>
                        <?php echo $usuario->Telefono ?>
                    </td>
                    <td>
                        <?php echo $usuario->Edad ?>
                    </td>
                    <td>
                        <a href="Index.php?controlador=usuario&accion=MostrarUsuario&id=<?php echo $usuario->id ?>"
                            class="btn btn-warning" title="Edit">
                            <i class="bi bi-pencil-square"></i>
                        </a>



                    </td>
                    <td>
                        <a href="Index.php?controlador=usuario&accion=Eliminar&id=<?php echo $usuario->id ?>"
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