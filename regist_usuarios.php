<?php
require 'usuarios.php';

class Usuarios {
    private $conn;
    private $tabla = 'api_usuarios';

    public function __construct() {
        $db = new Database();
        $this->conn = $db->conectar();
    }

    // Operación de creación (Create)
    public function agregarUsuario($nombreUsuario, $contrasena) {
        $sql = "INSERT INTO {$this->tabla} (nombre_usuario, contrasena) VALUES (:nombre_usuario, :contrasena)";
        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(':nombre_usuario', $nombreUsuario);
        $stmt->bindParam(':contrasena', $contrasena);

        return $stmt->execute();
    }

    // Operación de lectura (Read)
    public function obtenerUsuarios() {
        $sql = "SELECT * FROM {$this->tabla}";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Operación de actualización (Update)
    public function actualizarUsuario($id, $nombreUsuario, $contrasena) {
        $sql = "UPDATE {$this->tabla} SET nombre_usuario = :nombre_usuario, contrasena = :contrasena WHERE id = :id";
        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(':nombre_usuario', $nombreUsuario);
        $stmt->bindParam(':contrasena', $contrasena);
        $stmt->bindParam(':id', $id);

        return $stmt->execute();
    }

    // Operación de eliminación (Delete)
    public function eliminarUsuario($id) {
        $sql = "DELETE FROM {$this->tabla} WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':id', $id);

        return $stmt->execute();
    }
}
?>
