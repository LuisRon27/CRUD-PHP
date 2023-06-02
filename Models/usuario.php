<?php
require_once("core/crud.php");

class Usuario extends Crud
{
    public function __construct(
        public int $id = 0,
        public string $name = "",
        public string $apellido = "",
        public string $telefono = "",
        public int $edad = 0
    ) {
        parent::__construct("usuario");
    }

    public function insertar()
    {
        $columns = "id, Nombre, Apellido, Telefono, Edad";
        $placeholders = "?, ?, ?, ?, ?";
        $data = [$this->id, $this->name, $this->apellido, $this->telefono, $this->edad];
        $this->Create($columns, $placeholders, $data);
    }

    public function Actualizar()
    {
        $columns = "Nombre=?, Apellido=?, Telefono=?, Edad=?";
        $data = [$this->name, $this->apellido, $this->telefono, $this->edad];
        $id = $this->id;
        $this->Modification($columns, $data, $id);
    }

    public function Remover()
    {
        $this->Delete($this->id);
    }

}
?>