<?php
    require_once('conexion.php');

    if(isset($_POST['validador'])){
        $iUser = $_POST['iUser'];
        $iPass = $_POST['iPass'];


    try{  
        $stmt = $conn->prepare("SELECT * FROM cliente WHERE rut=:user and clave=:clave");
        $stmt->bindParam(":user",$iUser);
        $stmt->bindParam(":clave",$iPass);
        $stmt->execute();
        
        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $resultados =$stmt->fetchAll();
        //var_dump($resultados);
        //Preguntar si recibi algo o no
        session_start();//Iniciar el uso de sesiones
        $_SESSION['rut'] = $iUser;
        $_SESSION['timeout'] = time();
        echo '1';//Indicar que encontre algo
        
        //echo json_encode($resultados);
        
    } catch(PDOException $e) {
      echo "Error: " . $e->getMessage();
    }
    $conn = null;
}
?>