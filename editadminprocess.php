<?php

    $connection = mysqli_connect("localhost","root","","myproject");

    if(isset($_POST['submit'])){

        $id = $_GET['admin_id'];

        $query = "UPDATE admin SET admin_id='$_POST[adminid]',fname='$_POST[fname]',lname='$_POST[lname]',post='$_POST[post]',username='$_POST[username]',password='$_POST[password]' WHERE admin_id = '$_POST[adminid]'";

        $query_run = mysqli_query($connection,$query);

        if($query_run){
            echo '<script type="text/javascript"> alert ("updated") </script>';
            header("Location:admindetails.php");
    
        }
    
        else{
            echo '<script type="text/javascript"> alert ("not updated") </script>';
        }
    }

?>