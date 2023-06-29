<?php

$conn = new mysqli('127.0.0.1','root','','gestion_taches');

if (!$conn){
    die(mysqli_error($conn));
}

?>