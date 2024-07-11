<?php

    $connection = mysqli_connect("localhost","root","","myproject");

    if(isset($_POST['submit'])){

        $no = $_GET['coachid'];
        $file_name = $_FILES['image']['name'];
        $file_type = $_FILES['image']['type'];
        $file_size = $_FILES['image']['size'];
        $temp_name = $_FILES['image']['tmp_name'];
        
        $upload_to = 'coaches/';
        
        move_uploaded_file($temp_name,$upload_to.$file_name);

        $sql = "UPDATE coaches SET coachid='$_POST[coachid]',name='$_POST[name]',bday='$_POST[bday]',contact='$_POST[contact]',nic='$_POST[nic]',address='$_POST[address]',email='$_POST[email]',btype='$_POST[btype]',btime='$_POST[btime]', image='$file_name' WHERE coachid='$_POST[coachid]'";

        $query=mysqli_query($connection,$sql);

        if($query){
            echo '<script type="text/javascript"> alert ("updated") </script>';
            header('Location:coach.php');
            
    
        }
    
        else{
            echo '<script type="text/javascript"> alert ("not updated") </script>';
        }
    }

?>