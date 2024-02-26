<?php
class Database
{
    private $host = 'localhost'; // Host de la base de datos
    private $db_user = 'root'; // Usuario de la base de datos (por defecto en XAMPP es 'root')
    private $db_password = ''; // Contraseña de la base de datos (por defecto en XAMPP es vacía)
    private $db_name = 'laravel'; // Nombre de la base de datos que deseas usar
    private $conn;

    // Método para conectar a la base de datos
    public function connect()
    {
        $this->conn = new mysqli($this->host, $this->db_user, $this->db_password, $this->db_name);

        // Verificar la conexión
        if ($this->conn->connect_error) {
            die("Error de conexión: " . $this->conn->connect_error);
        }

        return $this->conn;
    }

    // Método para desconectar de la base de datos
    public function disconnect()
    {
        if ($this->conn) {
            $this->conn->close();
        }
    }
}