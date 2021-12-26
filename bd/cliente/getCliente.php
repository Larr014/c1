<?php
    //require_once('../conexion.php');
    //$id = '1';
    try{  
        $stmt = $conn->prepare("SELECT * FROM cliente WHERE id=:id");
        $stmt->bindParam(":id",$id);
        $stmt->execute();
    
        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $resultados =$stmt->fetchAll();
        //var_dump($resultados);
        
    } catch(PDOException $e) {
      echo "Error: " . $e->getMessage();
    }
    $conn = null;

?>