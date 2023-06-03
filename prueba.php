<?php
if (isset($_GET["controlador"])) {
    $controlador = $_GET["controlador"];

    if ($controlador === "usuario") {
        require_once("controller/usuario_controlador.php");
        $controlador = new UsuarioControlador();
        $controlador->indexUsuario();
    } elseif ($controlador === "animal") {
        require_once("controller/animal_controlador.php");
        $controlador = new AnimalControlador();
        $controlador->indexAnimal();
    } else {
        echo "Error: Controlador no válido";
    }
} else {
    echo "Error: Controlador no especificado";
}
?>
