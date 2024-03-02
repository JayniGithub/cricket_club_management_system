<?php 

    $connection = mysqli_connect("localhost","root","","myproject");

    $id = $_GET['id'];

    $query = "DELETE FROM ground_booking WHERE booking_id = '$id'";

    $query_run = mysqli_query($connection,$query);

    if($query_run){
        echo '<script type="text/javascript"> alert ("Deleted") </script>';
        header("Location:admin.php");
        

    }

    else{
        echo '<script type="text/javascript"> alert ("Not Deleted") </script>';
    }


?>