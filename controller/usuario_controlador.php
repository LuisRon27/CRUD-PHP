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
        require_once("View/usuarios.php");
    }

    //EDITAR
    public function MostrarUsuario()
    {

        
        if (isset($_REQUEST["id"])) {
            $usuario = $this->consultarID($_REQUEST["id"]);
        }else{
            $usuario = $this;
        }
        require_once("View/usuario_formulario.php");
    }

    //GUARDAR
    public function Guardar()
    {
        $this->id = $_REQUEST["id"];
        $this->name = $_REQUEST["Nombre"];
        $this->apellido = $_REQUEST["Apellido"];
        $this->telefono = $_REQUEST["Telefono"];
        $this->edad = $_REQUEST["Edad"];

        $this->id > 0 ? $this->Actualizar() : $this->insertar();
        header("Location:Index.php");
    }

    public function Eliminar(){
        $this->Delete($_REQUEST["id"]);
        header("Location:Index.php");
    }
}

?>