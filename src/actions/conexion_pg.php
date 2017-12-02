<?php
    $host = "localhost";
    $port = "5432";
    $dbname = "cfe_comments";
    $user = "postgres";
    $password = "ari123";
    $pg_options = "--client_encoding=UTF8";

    $connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} options='{$pg_options}'";
    $dbconn = pg_connect($connection_string);

/*
    if($dbconn){
        echo "Conectado a ". pg_host($dbconn); 
    }else{
        echo "Error in connecting to database.";
    }
echo "<br />";
*/

//Descomentar en XAMPP para activar el Driver de PortgrSQL
//extension=php_pdo_pgsql.dll
//extension=php_pgsql.dll
?>