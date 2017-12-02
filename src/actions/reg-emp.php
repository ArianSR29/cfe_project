<?php
    include 'conexion_pg.php';

    $rpe = $_POST['rpe'];
    $nombre_empleado = $_POST['nombre_empleado'];
    $A_paterno = $_POST['A_paterno'];
    $A_materno = $_POST['A_materno'];
    $tipo_empleado = $_POST['tipo_empleado'];
    $pass = $_POST['pass'];


$pass = md5($pass);
$query = "INSERT INTO login(rpe, NOMBRE_EMPLEADO, A_PATERNO_EMPLEADO, A_MATERNO_EMPLEADO, TIPO_EMPLEADO, PASS) VALUES ('$rpe', '$nombre_empleado', '$A_paterno', '$A_materno', '$tipo_empleado', '$pass');";
$result = pg_query($dbconn, $query) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
$cmdtuples = pg_affected_rows($result);
print "<script> alert('Los datos se han registrado correctamente');</script>";
print "<script>window.location='../temps/admins-panel.php';</script>"; 

    // Free resultset liberar los datos
pg_free_result($result);

    // Closing connection cerrar la conexión
pg_close($dbconn);    
?>
