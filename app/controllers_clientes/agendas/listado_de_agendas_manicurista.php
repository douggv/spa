<?php 
include '../../config.php';

$sql = "SELECT *,
    reservas.id AS id_reserva,
    services.nombre AS servicio_nombre,
    usuarios.id AS id_usuario,
    usuarios.nombre AS usuario_nombre
FROM 
    reservas
INNER JOIN 
    usuarios ON reservas.id_usuario = usuarios.id
INNER JOIN 
    services ON reservas.id_servicio = services.id
        
        
        
	 where categoria = 'manicurista' ";
$query = $pdo->prepare($sql);
$query->execute();
$eventos = $query->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($eventos);

?>