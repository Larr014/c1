<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="../dist/js/jquery-3.6.0.js"></script>
    <script src="../dist/js/log.js"></script>
    <?php
        session_start();
        $tActual = time();
        if(isset($_SESSION['rut']) && $tActual - $_SESSION['timeout']<30){
            header("location: principal.php");
        }else{
            session_destroy();
        }
    ?>
</head>
<body>
    <form>
        <input type='text' id='iUser' placeholder='Ingrese usuario'>
        <input type='password' id='iPass' placeholder='Ingrese Contraseña'>
        <button type='button' id='btnLog'>Log</button>
    <form>
</body>
</html>