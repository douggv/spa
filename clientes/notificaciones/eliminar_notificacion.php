<?php

include ('../../app/config.php');

$id = $_POST['id'];

// Preparar y ejecutar la consulta SQL para eliminar la notificación
$sql = "DELETE FROM notificaciones WHERE id = ?";

$sentencia = $pdo->prepare($sql);
$sentencia->bindParam(1, $id);
if($sentencia->execute()){
    session_start();
    $_SESSION['mensaje'] = "Se elimino la notificacion de la manera correcta ";
    $_SESSION['icono'] = 'success';
    header('Location: '.$URL.'/clientes');
}else{
    session_start();
    $_SESSION['mensaje'] = "error no se pudo eliminar la notificacion";
    $_SESSION['icono'] = 'error';
    header('Location: '.$URL.'/clientes');
}


