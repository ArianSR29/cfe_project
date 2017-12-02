<?php
session_start();
include 'conexion_pg.php';
$rpe = $_POST['rpe'];
$password = $_POST['pass'];
if((!$rpe) || (!$password)){
    print "<script>alert('Usuario o Contraseña Incorrectos 1');</script>";
        print "<script>window.location='../../index.php';</script>"; 
}else{
    //$password = md5($password);
    $sql = pg_query(" SELECT * FROM FNT_LOGUIN('$rpe', '$password', '1');");
    $login_check = pg_num_rows($sql);
    if($login_check > 0){
        while($row = pg_fetch_array($sql)){
            foreach ($row as $key => $val){
                $$key = stripslashes( $val );
            }
            $_SESSION['rpe'] = $rpe;
           print "<script> window.location='../temps/admins-panel.php';</script>";
        }      
    }    
    $sql = pg_query(" SELECT * FROM FNT_LOGUIN('$rpe', '$password', '0');");
    $login_check = pg_num_rows($sql);
    if($login_check > 0){
        while($row = pg_fetch_array($sql)){
            foreach ($row as $key => $val){
                $$key = stripslashes( $val );
            }
            $_SESSION['rpe'] = $rpe;
           print "<script> window.location='../temps/user-panel.php';</script>";
        }
    }      
    
    else{
        print "<script>alert('Usuario o Contraseña Incorrectos 2');</script>";
        print "<script> window.location='../../index.php';</script>"; 
    }   
}



/*En vez de usuario RPE


>>Panel de administrador
    -Va a dar de alta a los empleados que usarán el sistema
        -Clave RPE
        -Nombre
        -Apellidos
        -Contraseña
        
>>Panel del empleado
    -
        -Guardar los datos del empleado
        -Lista "Tipo de Servicio"
            -Queja
            -Aclaración
            -Pago
            -Otros
        -Lista "Tipo de Cliente"
            -Excelente
            -Bueno
            -Regular
            -Malo
        -RPU (Clave Cliente)
        -Nombre Cliente
        -Apellido Cliente
        -Comentarios
                           
           
RPU = Clave de Clientes
RPE = clave de Empleados*/




?>