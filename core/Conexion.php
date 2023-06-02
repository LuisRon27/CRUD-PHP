<?php

class Conexion
{
    public function __construct(
        public string $driver = "mysql",
        public string $host = "localhost",
        public string $user = "root",
        public string $password = "",
        public string $dbName = "sunny_side",
        public string $charset = "utf8"
    ) {
    }

    protected function Conexion()
    {
        try {
            $dsn = "$this->driver:host=$this->host;dbname=$this->dbName;charset=$this->charset";
            $pdo = new PDO($dsn, $this->user, $this->password);
            return $pdo;
        } catch (PDOException $mensaje) {
            echo $mensaje->getMessage();
        }
    }
}

?>
