<?php
require_once("core/crud.php");

class Animal extends Crud
{
    public function __construct(
        public int $id = 0,
        public string $Nombre = "",
        public string $Raza = "",
        public string $Sexo = "",
        public string $Color = "",
        public int $Edad = 0
    ) {
        parent::__construct("animal");
    }

    public function insertar()
    {
        $columns = "id, Nombre, Raza, Sexo, Color, Edad";
        $placeholders = "?, ?, ?, ?, ?, ?";
        $data = [$this->id, $this->Nombre, $this->Raza, $this->Sexo, $this->Color, $this->Edad];
        $this->Create($columns, $placeholders, $data);
    }

    public function Actualizar()
    {
        $columns = "Nombre=?, Raza=?, Sexo=?, Color=? , Edad=?";
        $data = [$this->Nombre, $this->Raza, $this->Sexo, $this->Color, $this->Edad];
        $id = $this->id;
        $this->Modification($columns, $data, $id);
    }

    public function Remover()
    {
        $this->Delete($this->id);
    }

}
?>