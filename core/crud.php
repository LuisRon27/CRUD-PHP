<?php
require_once("core/Conexion.php");

class Crud extends Conexion
{
    private $pdo;

    public function __construct(public string $tabla)
    {
        parent::__construct();
        $this->pdo = $this->Conexion();
    }

    // Consultar todos los registros de la tabla
    public function consultarTodo()
    {
        try {
            $stm = $this->pdo->prepare("SELECT * FROM $this->tabla");
            $stm->execute();
            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (PDOException $mensaje) {
            echo $mensaje->getMessage();
        }
    }

    // Consultar un registro por ID
    public function consultarID(int $id)
    {
        try {
            $stm = $this->pdo->prepare("SELECT * FROM $this->tabla WHERE id = ?");
            $stm->execute([$id]);
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (PDOException $mensaje) {
            echo $mensaje->getMessage();
        }
    }

    // Eliminar un registro por ID
    public function Delete(int $id)
    {
        try {
            $stm = $this->pdo->prepare("DELETE FROM $this->tabla WHERE id = ?");
            $stm->execute([$id]);
        } catch (PDOException $mensaje) {
            echo $mensaje->getMessage();
        }
    }

    // Crear un nuevo registro
    public function Create(string $columns, string $placeholders, array $data)
    {
        try {
            $stm = $this->pdo->prepare("INSERT INTO $this->tabla ($columns) VALUES ($placeholders)");
            $stm->execute($data);
        } catch (PDOException $mensaje) {
            echo $mensaje->getMessage();
        }
    }

    // Modificar un registro
    public function Modification(string $column, array $data, int $id)
{
    try {
        $placeholders = implode(', ', array_fill(0, count($data), '?'));
        $query = "UPDATE $this->tabla SET $column WHERE id = ?";
        $stm = $this->pdo->prepare($query);
        $stm->execute(array_merge($data, [$id]));
    } catch (PDOException $mensaje) {
        echo $mensaje->getMessage();
    }
}


}

?>