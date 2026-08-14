<?php
include_once __DIR__ . '/../config/conexion.php';
include_once __DIR__ . '/../models/empleado.php';

class ControllerEmpleado {
    private $db;
    private $empleadoModel;

    public function __construct() {
        global $conexion;
        $this->db = $conexion;
        $this->empleadoModel = new Empleado($this->db);
    }

    public function guardar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->empleadoModel->nombre = $_POST['nombre'] ?? '';
            $this->empleadoModel->apellido = $_POST['apellido'] ?? '';
            $this->empleadoModel->email = $_POST['email'] ?? '';
            $this->empleadoModel->telefono = $_POST['telefono'] ?? '';

            if ($this->empleadoModel->crear()) {
                return "Empleado guardado correctamente.";
            } else {
                return "Error al guardar el empleado.";
            }
        }
        return "";
    }
}
?>