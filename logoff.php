<?php

session_start();

if (isset($_POST['desconectar'])) {
    session_destroy();
    header("Location:login.php");
    exit();
}
?>