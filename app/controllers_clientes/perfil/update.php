<?php
include '../../config.php';

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$telefono = $_POST["telefono"];

$id = $_POST["id_usuario"];

$query = $pdo->prepare("UPDATE usuarios 
SET nombre = :nombre,
apellido = :apellido,  
telefono = :telefono
WHERE id = :id_usuario");

$query->bindParam(":nombre", $nombre, PDO::PARAM_STR);
$query->bindParam(":apellido", $apellido, PDO::PARAM_STR);
$query->bindParam(":telefono", $telefono,PDO::PARAM_STR);
$query->bindParam(":id_usuario", $id, PDO::PARAM_INT);

if ($query->execute()) {

    $mensaje = "Un usuario ha sido actualizado con el nombre de: " . $nombre;
    $sql = "INSERT INTO auditorias (mensaje) VALUES (?)";
    $query = $pdo->prepare($sql);
    $query->bindParam(1, $mensaje, PDO::PARAM_STR);
    $query->execute();

    session_start();
    $_SESSION['mensaje'] = "Usuario Actualizado Correctamente";
    $_SESSION['icono'] = "success";
    header("Location: ".$URL."/clientes/perfil/index.php");
} else {
    session_start();
    $_SESSION['mensaje'] = "Error al Actualizar el Usuario";
    $_SESSION['icono'] = "error";
    header("Location: ".$URL."/clientes/perfil/index.php");
}
?>