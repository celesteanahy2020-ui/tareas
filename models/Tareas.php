<?php
class Tareas {
    private $conn;
    private $table = 'tareas';

    public $id;
    public $titulo;
    public $descripcion;

    public function __construct($db) {
        $this->conn = $db;
    }
}
?>