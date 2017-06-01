<?php 
$sql1 = "select * from usuario";
    $resultado = mysql_query($sql1);

        while($row1 = mysql_fetch_array($resultado)){
            echo 'ID Usuario: ' . $row1['IDUSUARIO'] . ' ';
            echo 'Nombre: ' . $row1['NOMBRE'] . ' ';
        }

