<?php
    require_once('../conexion.php');
    
    if(isset($_POST['validador'])){
        $id = $_POST['iId'];
        $nombre = $_POST['iNombre'];
        $apellido = $_POST['iApellido'];

        try{
            $stmt = $conn->prepare("UPDATE cliente SET nombre=:nombre,apellido=:apellido WHERE id=:id");
            $stmt->bindParam(":nombre",$nombre);
            $stmt->bindParam(":apellido",$apellido);
            $stmt->bindParam(":id",$id);
            $stmt->execute();
            echo "1"; //1 es insercion exitosa
        }catch(PDOException $e){
            echo "Conexion fallida: ". $e->getMessage();
        }

    }


?>