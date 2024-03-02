<?php 

    $connection = mysqli_connect("localhost","root","","myproject");

        $id = $_GET['id'];

        $query = "INSERT INTO ground_booking(booking_id,name,nic,email,contact_no,purpose,booking_date,end_date,no_of_days,amount)
        SELECT approval_id,name,nic,email,contact_no,purpose,booking_date,end_date,no_of_days,amount FROM approval WHERE approval_id = '$id' ";

        //$query_run = mysqli_query($connection,$query);

        
        if($query_run = mysqli_query($connection,$query)){

            echo "successfull";
            header('Location:admin.php');
        }
        else{
            echo "error :".$query."<br>".$connection->error;
        }

        $sql = "SELECT approval_id,name,nic,email,purpose,booking_date,end_date,no_of_days,amount FROM approval WHERE approval_id = '$id'";

        $sql_run = mysqli_query($connection,$sql);

        while($result = mysqli_fetch_array($sql_run)){

            $appid = $result['approval_id'];
            $name = $result['name'];
            $nic = $result['nic'];
            $mail = $result['email'];
            $purpose = $result['purpose'];
            $date = $result['booking_date'];
            $days = $result['no_of_days'];
            $amount = $result['amount'];

            $to = $mail;
            $subject = "Ground Booking Details";
            $message = "Your Booking has done successfully..! \n Booking ID :".$appid."\n"."Name :".$name."\n"."NIC :".$nic."\n"."Purpose :".$purpose."\n"."Booking Date :".$date."\n"."No of Days :".$days."\n"."Full Payment".$amount."\n"."Account No:10000524"."\n"."Branch : Matara Branch"."\n"."Bank : BOC"."\n"."First pay half of your total amount as advance payment for ground booking";
            $headers = "From : jayanihettiarachchi98@gmail.com";
    
            $retval = mail($to,$subject,$message,$headers);
    
            if($retval == true){
                echo "Message Sent Successfully";
            }
            else{
                echo "Message could not be sent";
            }

        }

        $query1 = "DELETE FROM approval WHERE approval_id = '$id'";

        $query1_run = mysqli_query($connection,$query1);

?>