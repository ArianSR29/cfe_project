<?php
    include 'conexion_pg.php';

    $rpu = $_POST['rpu'];
    $nombre_cliente= $_POST['nombre_cliente'];
    $A_paterno = $_POST['A_paterno'];
    $A_materno = $_POST['A_materno'];
    $tipo_cliente = $_POST['tipo_cliente'];
    $tipo_servicio = $_POST['tipo_servicio'];
    $comentario = $_POST['comentario'];


$pass = md5($pass);
$query = "INSERT INTO servicios(rpu, NOMBRE_CLIENTE, A_PATERNO_CLIENTE, A_MATERNO_CLIENTE, TIPO_CLIENTE, TIPO_SERVICIO, COMENTARIO) VALUES ('$rpu', '$nombre_cliente', '$A_paterno', '$A_materno', '$tipo_cliente','$tipo_servicio', '$comentario');";
$result = pg_query($dbconn, $query) or die('ERROR AL INSERTAR DATOS: ' . pg_last_error());
$cmdtuples = pg_affected_rows($result);
print "<script> alert('Los datos se han registrado correctamente');</script>";
print "<script>window.location='../temps/admins-panel.php';</script>"; 

    // Free resultset liberar los datos
pg_free_result($result);

    // Closing connection cerrar la conexión
pg_close($dbconn);    
?>
