<?php 

    $connection = mysqli_connect("localhost","root","","myproject");

    $id = $_GET['id'];

    $query = "SELECT approval_id,name,nic,email,purpose,booking_date FROM approval WHERE approval_id = '$id'";

    $query_run = mysqli_query($connection,$query);

    while($result = mysqli_fetch_array($query_run)){

        $appid = $result['approval_id'];
        $name = $result['name'];
        $nic = $result['nic'];
        $mail = $result['email'];
        $purpose = $result['purpose'];
        $date = $result['booking_date'];

        $to = $mail;
        $subject = "Ground Booking Details";
        $message = "Sorry...! Your ground booking request had been rejected because of the inconvenience reason... Thank you for choosing us...!";
        $headers = "From :   Matara Cricket Club";

        $retval = mail($to,$subject,$message,$headers);
    }


    $sql = "DELETE FROM approval WHERE approval_id = '$id'";

    $sql_run = mysqli_query($connection,$sql);

    if($sql_run){
        echo '<script type="text/javascript"> alert ("Deleted") </script>';
        header("Location:admin.php");
        

    }

    else{
        echo '<script type="text/javascript"> alert ("Not Deleted") </script>';
    }

?>