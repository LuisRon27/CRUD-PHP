<?php

require_once("Models/usuario.php");

class UsuarioControlador extends Usuario
{

    public function __construct()
    {
        parent::__construct();
    }

    public function indexUsuario()
    {
        $usuarios = $this->consultarTodo(); // Obtener los datos de los usuarios
        
        // Incluir la vista y pasar los datos como parámetro
        require_once("View/usuarios.php");
    }

    //EDITAR
    public function MostrarUsuario()
    {


        if (isset($_REQUEST["id"])) {
            $usuario = $this->consultarID($_REQUEST["id"]);
        } else {
            $usuario = $this;
        }
        require_once("View/usuario_formulario.php");
    }

    //GUARDAR
    public function Guardar()
    {
        $this->id = $_REQUEST["id"];
        $this->Nombre = $_REQUEST["Nombre"];
        $this->Apellido = $_REQUEST["Apellido"];
        $this->Telefono = $_REQUEST["Telefono"];
        $this->Edad = $_REQUEST["Edad"];

        $this->id > 0 ? $this->Actualizar() : $this->insertar();
        //header("Location:Index.php");
        header("Location:Index.php?controlador=usuario");

    }

    public function Eliminar()
    {
        $this->Delete($_REQUEST["id"]);
        header("Location:Index.php?controlador=usuario");
    }
}

?>