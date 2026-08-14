<?php
class Empleado {
    private $conn;
    private $table = 'empleados';

    public $id;
    public $nombre;
    public $apellido;
    public $email;
    public $telefono;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function crear() {
        $query = "INSERT INTO " . $this->table . " (nombre, apellido, email, telefono) VALUES (:nombre, :apellido, :email, :telefono)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':nombre', $this->nombre);
        $stmt->bindParam(':apellido', $this->apellido);
        $stmt->bindParam(':email', $this->email);
        $stmt->bindParam(':telefono', $this->telefono);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}
?>