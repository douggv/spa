<?php
include '../../config.php';
$id = $_POST['id'];
$title = $_POST['title'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];

$sql = "UPDATE reservas SET title = ?, start = ?, end = ?, hora_cita = ? WHERE id = ?";
$query = $pdo->prepare($sql);
$query->bindParam(1, $title, PDO::PARAM_STR);
$query->bindParam(2, $fecha, PDO::PARAM_STR);
$query->bindParam(3, $fecha, PDO::PARAM_STR);
$query->bindParam(4, $hora, PDO::PARAM_STR);
$query->bindParam(5, $id, PDO::PARAM_INT);
$query->execute();



if($query->execute()){

    $mensaje = "Se  ha modificado la reserva de la manera correcta por: ".$nombre_usuario_sesion;
    $sql = "INSERT INTO auditorias (mensaje) VALUES (?)";
    $query = $pdo->prepare($sql);
    $query->bindParam(1, $mensaje, PDO::PARAM_STR);
        
    $query->execute();


    session_start();
    $_SESSION['mensaje'] = "Se modifico la reserva de la manera correcta ";
    $_SESSION['icono'] = 'success';
    header('Location: '.$URL.'/admin/agendas/index.php');
}else{
    session_start();
    $_SESSION['mensaje'] = "Error no se modifico la reserva";
    $_SESSION['icono'] = 'error';
    header('Location: '.$URL.'/admin/agendas/index.php');
}


?>