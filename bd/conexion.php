<?php
 $servername = 'localhost';
 $username = 'root';
 $password = '';
 $database = 'C1Tienda';

 try {
     $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
     // set the PDO error mode to exception
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     //echo "Conexion exitosa!";
 }catch(PDOException $e){
     echo "Conexion fallida: ". $e->getMessage();
 }

?>