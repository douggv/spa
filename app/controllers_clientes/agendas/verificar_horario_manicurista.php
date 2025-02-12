<?php 
include '../../config.php';

$fecha = $_GET['fecha2'];
$hora_cita = "";

$sql = "SELECT *, 
    services.id AS id_servicio

FROM reservas 
INNER JOIN services ON reservas.id_servicio = services.id
where fecha_cita = '$fecha' AND estado = 'aceptado' AND categoria = 'manicurista'";
$query = $pdo->prepare($sql);
$query->execute();
$datos = $query->fetchAll(PDO::FETCH_ASSOC);

$horario = [
    '08:00 - 09:00',
    '09:00 - 10:00',
    '10:00 - 11:00',
    '11:00 - 12:00',
    '12:00 - 13:00',
    '13:00 - 14:00',
    '14:00 - 15:00',
    '15:00 - 16:00',
    '16:00 - 17:00',
    '17:00 - 18:00'
];

foreach ($datos as $dato){
    $hora_cita = $dato['hora_cita'];
    for($i = 0; $i < count($horario); $i++){
        if($horario[$i] == $hora_cita){
            $num = $i + 1;
            $hora_res = "btn_h".$num;
            echo  "<script id='script_horario'>$('#".$hora_res."').attr('disabled',true); $('#".$hora_res."').css('background-color', 'red');</script>";       
         };
    };
};
?>
