<?php
include '../../../app/config.php';

$id = $_GET['id'];

$sql = ('UPDATE reservas SET estado = "aceptado" WHERE id = :id');

$sentencia = $pdo->prepare($sql);
$sentencia->bindParam(':id', $id);

$sentencia->execute();

if($sentencia->execute()){

    $mensaje = "Se acepto la reserva de la manera correcta por: ".$nombre_usuario_sesion;
    $sql = "INSERT INTO auditorias (mensaje) VALUES (?)";
    $query = $pdo->prepare($sql);
    $query->bindParam(1, $mensaje, PDO::PARAM_STR);
        
    $query->execute();


    session_start();
    $_SESSION['mensaje'] = "Se acepto la reserva de la manera correcta ";
    $_SESSION['icono'] = 'success';
    header('Location: '.$URL.'/admin/reservas/index.php');
}else{
    session_start();
    $_SESSION['mensaje'] = "Error no se acepto la reserva";
    $_SESSION['icono'] = 'error';
    header('Location: '.$URL.'/admin/reservas.');
}