<?php
function verificausuario(){
    if(!isset($_SESSION['rpe'])){
        unset($_SESSION);
        header("location: ../../index.php");
    }
}
?>