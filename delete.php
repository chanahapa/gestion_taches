<?php
include('connect.php');
if (isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="DELETE FROM taches WHERE id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        //echo "Ligne supprimée avec succès";
        header('location:taches.php');
    }else{
        die(mysqli_error($conn));
    }
};
?>