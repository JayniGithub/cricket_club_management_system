<?php

    $connection = mysqli_connect("localhost","root","","myproject");

    $id = $_GET['id'];

    $sql = "DELETE FROM coaches WHERE coachid='$id'";

    $query = mysqli_query($connection,$sql);

    if($query){
        echo '<script type="text/javascript"> alert ("Deleted") </script>';
        header("Location:admin.php");
        

    }

    else{
        echo '<script type="text/javascript"> alert ("Not Deleted") </script>';
    }

?>