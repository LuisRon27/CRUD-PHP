<?php
require_once("core/crud.php");

class Usuario extends Crud
{
    public function __construct(
        public int $id = 0,
        public string $Nombre = "",
        public string $Apellido = "",
        public string $Telefono = "",
        public int $Edad = 0
    ) {
        parent::__construct("usuario");
    }

    public function insertar()
    {
        $columns = "id, Nombre, Apellido, Telefono, Edad";
        $placeholders = "?, ?, ?, ?, ?";
        $data = [$this->id, $this->Nombre, $this->Apellido, $this->Telefono, $this->Edad];
        $this->Create($columns, $placeholders, $data);
    }

    public function Actualizar()
    {
        $columns = "Nombre=?, Apellido=?, Telefono=? , Edad=?";
        $data = [ $this->Nombre, $this->Apellido, $this->Telefono, $this->Edad];
        $id = $this->id;
        $this->Modification($columns, $data, $id);
    }

    public function Remover()
    {
        $this->Delete($this->id);
    }

}
?>