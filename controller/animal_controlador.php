<?php

require_once("Models/animal.php");

class AnimalControlador extends Animal
{

    public function __construct()
    {
        parent::__construct();
    }

    public function indexAnimal()
    {
        $animales = $this->consultarTodo(); // Obtener los datos de los animales
        
        // Incluir la vista y pasar los datos como parámetro
        require_once("View/animales.php");
    }

    //EDITAR
    public function MostrarAnimal()
    {


        if (isset($_REQUEST["id"])) {
            $animal = $this->consultarID($_REQUEST["id"]);
        } else {
            $animal = $this;
        }
        require_once("View/animal_formulario.php");
    }

    //GUARDAR
    public function Guardar()
    {
        $this->id = $_REQUEST["id"];
        $this->Nombre = $_REQUEST["Nombre"];
        $this->Raza = $_REQUEST["Raza"];
        $this->Sexo = $_REQUEST["Sexo"];
        $this->Color = $_REQUEST["Color"];
        $this->Edad = $_REQUEST["Edad"];

        $this->id > 0 ? $this->Actualizar() : $this->insertar();
        header("Location:Index.php");
    }

    public function Eliminar()
    {
        $this->Delete($_REQUEST["id"]);
        header("Location:Index.php");
    }
}

?>