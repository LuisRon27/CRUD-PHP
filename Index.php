<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["controlador"])) {
    $controlador = $_POST["controlador"];

    if ($controlador === "usuario") {
        require_once("controller/usuario_controlador.php");
        $controlador = new UsuarioControlador();
        if (isset($_POST["accion"]) && $_POST["accion"] === "MostrarUsuario") {
            $controlador->MostrarUsuario();
        } elseif (isset($_POST["accion"]) && $_POST["accion"] === "Guardar") {
            $controlador->Guardar();
        } elseif (isset($_POST["accion"]) && $_POST["accion"] === "Eliminar") {
            $controlador->Eliminar();
        } else {
            $controlador->indexUsuario();
        }
    } elseif ($controlador === "animal") {
        require_once("controller/animal_controlador.php");
        $controlador = new AnimalControlador();
        if (isset($_POST["accion"]) && $_POST["accion"] === "MostrarAnimal") {
            $controlador->MostrarAnimal();
        } elseif (isset($_POST["accion"]) && $_POST["accion"] === "Guardar") {
            $controlador->Guardar();
        } elseif (isset($_POST["accion"]) && $_POST["accion"] === "Eliminar") {
            $controlador->Eliminar();
        } else {
            $controlador->indexAnimal();
        }
    } else {
        echo "Error: Controlador no válido";
    }
} else {
    // Código para manejar las solicitudes GET y mostrar la tabla de animales o el formulario
    if (!isset($_GET["controlador"])) {
        require_once("controller/animal_controlador.php");
        $controlador = new AnimalControlador();
        $controlador->indexAnimal();
    } else {
        $controlador = $_GET["controlador"];
        if ($controlador === "usuario") {
            require_once("controller/usuario_controlador.php");
            $controlador = new UsuarioControlador();
            if (isset($_GET["accion"]) && $_GET["accion"] === "MostrarUsuario") {
                $controlador->MostrarUsuario();
            } elseif (isset($_GET["accion"]) && $_GET["accion"] === "Guardar") {
                $controlador->Guardar();
            } elseif (isset($_GET["accion"]) && $_GET["accion"] === "Eliminar") {
                $controlador->Eliminar();
            } else {
                $controlador->indexUsuario();
            }
        } elseif ($controlador === "animal") {
            require_once("controller/animal_controlador.php");
            $controlador = new AnimalControlador();
            if (isset($_GET["accion"]) && $_GET["accion"] === "MostrarAnimal") {
                $controlador->MostrarAnimal();
            } elseif (isset($_GET["accion"]) && $_GET["accion"] === "Guardar") {
                $controlador->Guardar();
            } elseif (isset($_GET["accion"]) && $_GET["accion"] === "Eliminar") {
                $controlador->Eliminar();
            } else {
                $controlador->indexAnimal();
            }
        } else {
            echo "Error: Controlador no válido";
        }
    }
}
?>