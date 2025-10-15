<?php
namespace lib;
use PDO;
use PDOException;

class Database {
    private $host = "db"; 
    private $db_name = "db_users";
    private $username = "root";
    private $password = "root";
    public $conn;

    public function getConnection() {

        $this->conn = null;

        try {

            //interpolacion de las variables necesarias para hacer la conexion
            $this->conn = new PDO("mysql:host={$this->host};dbname={$this->db_name}", $this->username, $this->password);
            $this->conn->exec("set names utf8");
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch(PDOException $exception) {
            echo "Error de conexión: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
?>