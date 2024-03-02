<?php

    $connection = mysqli_connect("localhost","root","","myproject");

    if(isset($_POST['submit'])){

        $no = $_GET['coachid'];

        $sql = "UPDATE coaches SET coachid='$_POST[coachid]',name='$_POST[name]',bday='$_POST[bday]',contact='$_POST[contact]',nic='$_POST[nic]',address='$_POST[address]',email='$_POST[email]',btype='$_POST[btype]',btime='$_POST[btime]' WHERE coachid='$_POST[coachid]'";

        $query=mysqli_query($connection,$sql);

        if($query){
            echo '<script type="text/javascript"> alert ("updated") </script>';
            
    
        }
    
        else{
            echo '<script type="text/javascript"> alert ("not updated") </script>';
        }
    }

?>