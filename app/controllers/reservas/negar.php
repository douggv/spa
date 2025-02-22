<?php
include '../../../app/config.php';

$id = $_GET['id'];

$estado = 'negado';

$sql = ('UPDATE reservas SET estado = :estado WHERE id = :id');

$sentencia = $pdo->prepare($sql);
$sentencia->bindParam(':id', $id);
$sentencia->bindParam(':estado', $estado);

$sentencia->execute();

if($sentencia->rowCount() > 0){
    $mensaje = "Se ha negado la reserva de la manera correcta por: ".$nombre_usuario_sesion;
    $sql = "INSERT INTO auditorias (mensaje) VALUES (?)";
    $query = $pdo->prepare($sql);
    $query->bindParam(1, $mensaje, PDO::PARAM_STR);
        
    $query->execute();
    session_start();
    $_SESSION['mensaje'] = "Se ha negado la reserva de la manera correcta ";
    $_SESSION['icono'] = 'success';
    header('Location: '.$URL.'/admin/reservas/lista_de_reservas_negadas.php');
}else{
    session_start();
    $_SESSION['mensaje'] = "Error no se nego la reserva";
    $_SESSION['icono'] = 'error';
    header('Location: '.$URL.'/admin/reservas.');
}