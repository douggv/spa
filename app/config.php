<?php

    date_default_timezone_set('America/Caracas');
    $fecha_de_ingreso = date('Y-m-d');
    $fyh_creacion = date('Y-m-d H:i:s');
    $fyh_actualizacion = date('Y-m-d H:i:s');
    $URL = "http://localhost/spa";
    define("APP_NAME", "Rullier");

    define("SERVIDOR", "localhost");
    define("USUARIO", "root");
    define("PASSWORD", "");
    define("BD", "spa");

    $servidor = "mysql:dbname=".BD.";host=".SERVIDOR;

    try{
        $pdo = new PDO($servidor, USUARIO, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

    }catch(PDOException $e){
        print_r($e);
        echo "Error: ".$e->getMessage();
    }

?>