<?php 

include '../../config.php';

$id_servicio = $_POST['id_servicio_fk'];
$id_usuario = $_POST['id_usuario_fk'];
$fecha_cita = $_POST['fecha'];
$hora_cita = $_POST['hora'];
$forma_pago = $_POST['forma_pago'];
$referencia = $_POST['referencia'];
$estado = $_POST['estado'];
$nombre_pago = $_POST['nombre_pago'];


$sql = "INSERT INTO reservas (id_servicio,id_usuario,fecha_cita,hora_cita,forma_pago,referencia,estado,nombre_pago) VALUES (?,?,?,?,?,?,?,?)";
$query = $pdo->prepare($sql);
$query->bindParam(1, $id_servicio, PDO::PARAM_INT);
$query->bindParam(2, $id_usuario, PDO::PARAM_INT);
$query->bindParam(3, $fecha_cita, PDO::PARAM_STR);
$query->bindParam(4, $hora_cita, PDO::PARAM_STR);
$query->bindParam(5, $forma_pago, PDO::PARAM_STR);
$query->bindParam(6, $referencia, PDO::PARAM_STR);
$query->bindParam(7, $estado, PDO::PARAM_STR);
$query->bindParam(8, $nombre_pago, PDO::PARAM_STR);
$query->execute();

if ($query->execute()) {
        
    session_start();
    
    // Mensaje de Alerta
    $_SESSION['mensaje'] = "Reserva Agendada Correctamente";
    $_SESSION['icono'] = "success";
    

    
    header("Location: ".$URL."/clientes/servicios/masajes/index.php");
    
}else{
    
    session_start();
    $_SESSION['mensaje'] = "Error ";
    $_SESSION['icono'] = "error";
    header("Location: ".$URL."/clientes/servicios/masajes/index.php"); 
}


?>