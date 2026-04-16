<?php
    include("config.php");
    $paring = "DELETE FROM cars WHERE id = ".$_GET['id']."";
    $valjund = mysqli_query($yhendus,$pairing);
    id($valjund){
        header("Location:admin.php");
    }
    ?>