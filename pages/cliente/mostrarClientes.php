<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        require_once('../../bd/conexion.php');
        require_once('../../bd/cliente/getClientes.php');
    ?>
</head>
<body>
    <table>
        <tr>
            <th>id</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Accion</th>
        </tr>
        <?php
            foreach($resultados as $fila){
                echo "<tr><td>".$fila['id']."</td>";
                echo "<td>".$fila['nombre']."</td>";
                echo "<td>".$fila['apellido']."</td>";
                echo "<td><a href='modificarCliente.php?id=".$fila['id']."' >Modificar</a><a href='eliminarCliente.php?id=".$fila['id']."'>Eliminar</a></td></tr>";

            }
        ?>
</table>
</body>
</html>