<?php
include '../../config.php';
header('Content-Type: application/json; charset=utf-8');


$accion = (isset($_GET['accion']))?$_GET['accion']:"leer"; 

switch($accion){
    case 'agregar':

        $title = $_POST['title'];
        $start = $_POST['start'];
        $end = $_POST['end'];
        $descripcion = $_POST['descripcion'];
        $categoria = $_POST['categoria'];
        $cliente = $_POST['cliente'];


        echo "agregar";// instruccion para agregar

        $sql = "INSERT INTO eventos (title, descripcion, start, end, categoria, cliente) VALUES (?, ?, ?, ?, ?, ?)";
        $query = $pdo->prepare($sql);
        $query->bindParam(1, $title, PDO::PARAM_STR);
        $query->bindParam(2, $descripcion, PDO::PARAM_STR);
        $query->bindParam(3, $start, PDO::PARAM_STR);
        $query->bindParam(4, $end, PDO::PARAM_STR);
        $query->bindParam(5, $categoria, PDO::PARAM_STR);
        $query->bindParam(6, $cliente, PDO::PARAM_STR);
        $query->execute();
        
        echo json_encode($query);

        break;
    case 'modificar':
         echo "modificar";    // instruccion para modificar

        $id_evento = $_POST['id_evento'];
        $title = $_POST['title'];
        $start = $_POST['start'];
        $end = $_POST['end'];
        $descripcion = $_POST['descripcion'];
        $categoria = $_POST['categoria'];
        $cliente = $_POST['cliente'];


        $sql = "UPDATE eventos SET title = ?, descripcion = ?, start = ?, end = ?, categoria = ?, cliente = ? WHERE id_evento = ?";
        $query = $pdo->prepare($sql);
        $query->bindParam(1, $title, PDO::PARAM_STR);
        $query->bindParam(2, $descripcion, PDO::PARAM_STR);
        $query->bindParam(3, $start, PDO::PARAM_STR);
        $query->bindParam(4, $end, PDO::PARAM_STR);
        $query->bindParam(5, $categoria, PDO::PARAM_STR);
        $query->bindParam(6, $cliente, PDO::PARAM_STR);
        $query->bindParam(7, $id_evento, PDO::PARAM_INT);
        $query->execute();

        echo json_encode($query);
        break;
    case 'eliminar':
        echo "eliminar"; // instruccion para borrar
        $respuesta = false ;

        if(isset($_POST['id_evento'])){

            $id_evento = $_POST['id_evento'];

            $sql = "DELETE FROM eventos WHERE id_evento = ?";
            $query = $pdo->prepare($sql);
            $query->bindParam(1, $id_evento, PDO::PARAM_INT);
            $query->execute();
            
        }
        echo json_encode($query);
        break;
    default:
        // instruccion para leer
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
                WHERE reservas.estado = 'aceptado'";

        $query = $pdo->prepare($sql);
        $query->execute();
        $eventos = $query->fetchAll(PDO::FETCH_ASSOC);
            echo json_encode($eventos);
         
}




?>