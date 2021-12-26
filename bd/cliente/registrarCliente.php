<?php
    require_once('../conexion.php');
    
    if(isset($_POST['validador'])){
        $nombre = $_POST['iNombre'];
        $apellido = $_POST['iApellido'];

        try{
            $stmt = $conn->prepare("INSERT INTO cliente (nombre,apellido) VALUES (:nombre,:apellido)");
            $stmt->bindParam(":nombre",$nombre);
            $stmt->bindParam(":apellido",$apellido);
            $stmt->execute();
            echo "1"; //1 es insercion exitosa
        }catch(PDOException $e){
            echo "Conexion fallida: ". $e->getMessage();
        }

    }


?>