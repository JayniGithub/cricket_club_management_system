

<?php 

    $connection = mysqli_connect("localhost","root","","myproject");

    $query1 = "SELECT ground_fee FROM calc";

    $query1_run = mysqli_query($connection,$query1);

    $row1 = mysqli_fetch_array($query1_run);

    $value = $row1['ground_fee'];

?>




<!DOCTYPE html>
<html>
    <head>
        <title>Matara Cricket Club</title>
        <link rel="stylesheet" href="css/booking.css">

        <script>

            function difference(){

                var dt1,dt2,diff,nwdt1,nwdt2;

                dt1 = document.getElementById("d1").value;
                nwdt1 = new Date("dt1");
                dt2 = document.getElementById("d2").value;
                nwdt2 = new Date("dt2");

                diff = nwdt2 - nwdt1;

                document.getElementById("dy1").value = diff;
            }

        </script>



    </head>
    <body>
        <div class="heading"><h1>Ground Booking</h1></div>
        <div class="main">
            <form action="booking.php" method="post">
                <h2 class="lable">Name :</h2>
                <input type="text" name="name" id="n1" class="txtbox" value="<?php if(isset($_POST['name'])) echo $_POST['name'];?>">

                <h2 class="lable">NIC :</h2>
                <input type="text" name="nic" id="nic1" class="txtbox" value="<?php if(isset($_POST['nic'])) echo $_POST['nic'];?>">

                <h2 class="lable">Email :</h2>
                <input type="email" name="email" id="e1" class="txtbox" value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>">

                <h2 class="lable">Contact No :</h2>
                <input type="text" name="contact" id="c1" class="txtbox" value="<?php if(isset($_POST['contact'])) echo $_POST['contact'];?>">

                <h2 class="lable">Purpose :</h2>
                <input type="text" name="purpose" id="p1" class="txtbox" value="<?php if(isset($_POST['purpose'])) echo $_POST['purpose'];?>">

                <h2 class="lable">Booking Date :</h2>
                <input type="date" name="date" id="d1" class="txtbox" value="<?php if(isset($_POST['date'])) echo $_POST['date'];?>">

                <h2 class="lable">End Date :</h2>
                <input type="date" name="date1" id="d2" class="txtbox" value="<?php if(isset($_POST['date1'])) echo $_POST['date1'];?>">

                <h2 class="lable">Ground Fee :</h2>
                <lable class="text" name="fee" value=""><?php echo $row1['ground_fee'];?></lable>

                
                <br><br>

                <div class="scbtn">
                   <!-- <input type="submit" class="btn1" name="submit" value="Send to Approval">
                    <input type="submit" class="btn2" name="cancel" value="Cancel">-->
                    <button type="submit" class="btn1" name="add" value="add">Send for Approval</button>
                    <button type="submit" class="btn2" name="cancel" value="cancel">Cancel</button>
                </div>

            </form>

            </div>

    </body>
</html>




           <?php
           
                $connection = mysqli_connect("localhost","root","","myproject");

                if(isset($_POST['add'])){
                    //nic validation
                    $NIC=$_POST['nic'];
                    if(  preg_match('/^([0-9]{9}[x|X|v|V]|[0-9]{12})$/', $NIC))
                    {
                        //time duration & amount calculation
                        $start_date = strtotime($_POST['date']);
                        $end_date = strtotime($_POST['date1']);

                        $diff = ($end_date - $start_date)/60/60/24; 
                        $amount = $diff*$value;

                        //email
                        // $name = $_POST['name'];
                        // $to = $_POST['email'];
                        // $subject = "Cricket Club, Matara";
                        // $message = " Hello ".$name. "\n" ."No of days you booked :". $diff."\n"." Your Amount for booked dates is :". $amount."\n"." We will inform you when it approved";
                        // $from = "jayanihettiarachchi98@gmail.com";
                        // $headers = "From: $from";
                        // mail($to,$subject,$message,$headers);

                        //data insertion
                        $sql = "INSERT INTO approval(approval_id, name, nic, email, contact_no, purpose, booking_date, end_date, no_of_days, amount)
                        VALUES (null,'$_POST[name]','$_POST[nic]','$_POST[email]','$_POST[contact]','$_POST[purpose]',
                        '$_POST[date]','$_POST[date1]',$diff,$amount)";

                        if($sql_run = mysqli_query($connection,$sql)){
                            $successmessage = "Registration Successful";
                            echo "<script type='text/javascript'>alert('$successmessage');</script>";
                            header('location:booking.php');
                        }
                        else{
                            echo "error :".$sql."<br>".$connection->error;
                        }
                    }
                    else{
                        $message = "Invalid ID number, Please check again";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                    }

                }
           
           ?>
       