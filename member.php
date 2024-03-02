

<?php
    if(isset($_POST['cal'])){

    $connection = new mysqli('localhost','root','','myproject');

    $arr = "SELECT member_fee FROM calc ";

    $result = mysqli_query($connection, $arr);

    $row = mysqli_fetch_array($result);

    $num1 = $row['member_fee'];
    $num2 = $_POST['y1'];
    $res = $num1*$num2;
    }

?>

<?php
    $connection = new mysqli('localhost','root','','myproject');

    $arr1 = "SELECT member_fee FROM calc ";

    $result1 = mysqli_query($connection, $arr1);

    $row1 = mysqli_fetch_array($result1);

?>







<!DOCTYPE html>
<html>
    <head>
        <title>Matara Cricket Club</title>
        <link rel="stylesheet" href="css/member.css">
       
    </head>
    <body>
        <div class="reg"><h1>Member Registration</h1></div>
        <div class="main">
            <form name="form1" action="" method="post">
                
                    <h2 class="lable">Name :</h2>
                    <input type="text" class="name" name="fname" value="<?php if(isset($_POST['fname'])) echo $_POST['fname'];?>">
                    
                    <h2 class="lable">Date of Birth :</h2>
                    <input type="date" class="name" name="dob" value="<?php if(isset($_POST['dob'])) echo $_POST['dob'];?>">
                    
                    <h2 class="lable">ID No :</h2>
                    <input type="text" class="name" name="id" value="<?php if(isset($_POST['id'])) echo $_POST['id'];?>">
                    
                    <h2 class="lable">Email :</h2>
                    <input type="text" class="name" name="mail" value="<?php if(isset($_POST['mail'])) echo $_POST['mail'];?>">
                    
                    <h2 class="lable">Contact No :</h2>
                    <input type="text" class="name" name="contact" value="<?php if(isset($_POST['contact'])) echo $_POST['contact'];?>">
                    
                    <h2 class="lable">Address :</h2>
                    <input type="text" class="name" name="add" value="<?php if(isset($_POST['add'])) echo $_POST['add'];?>">
                   
                    <h2 class="lable">Member Fee :</h2>
                    <label class="fee" name="lable"><?php echo $row1['member_fee'];?></label>
                    
                    
                    <h2 class="lable">No of Years :</h2>
                    <input type="text" class="name" name="y1" value="<?php if(isset($_POST['y1'])) echo $_POST['y1'];?>">
                    
                    <h2 class="lable">Amount :</h2>
                    <input type="text" class="name" name="amo" value="<?php echo $res;?>">
                    <input type="submit" class="calc" name="cal" value="calculator">
                    <br>
                <div class="button">
                    <button name="submit" value="submit" class="btn1" a href="batch.php">Submit</button>
                  <!-- <a href="batch.php"><input type="submit"  value="Register" class="btn1" name="submit"></a>-->
                   <a href="index.html"><input type="button" class="btn2" value="Cancel" name="cancel"></a>
                </div>

                <div class="note">
                    <p class="par">NOTE : You will be recieve an email for given email address... Please check and register to the Batch for Practices...</p>
                </div>
            </form>




    <?php
        $connection = mysqli_connect("localhost","root","","myproject");
        if(isset($_POST['submit'])){


            $NIC=$_POST['id'];
            if(  preg_match('/^([0-9]{9}[x|X|v|V]|[0-9]{12})$/', $NIC))
            {
            //echo "Success";
            $sql = ("INSERT INTO member(member_id, name, email, dob, id, contact_no, no_of_years, member_fee, address) 
                VALUES (null,'$_POST[fname]','$_POST[mail]','$_POST[dob]','$_POST[id]','$_POST[contact]','$_POST[y1]',
                '$_POST[amo]','$_POST[add]')");
            if($results=mysqli_query($connection,$sql))
            {
                //email
                $amount = $_POST['amo'];
                $cost = $_POST['y1'];
                $mail = $_POST['mail'];
                $name = $_POST['fname'];

                $to = $mail;
                $subject = "Member Registration Details";
                $message = "Name :".$name."\n"."Numbet of Years:".$cost."\n"."Registration Fee: 2500"."\n"."Full Membership Payment:".$amount."\n"."Account No:10000524"."\n"."Branch : Matara Branch"."\n"."Bank : BOC"."\n"."Note : After the payments submit the image of payment slip on the website";
                $headers = "From : jayanihettiarachchi98@gmail.com";

                $retval = mail($to,$subject,$message,$headers);

                if($retval == true){
                    //echo "Message Sent Successfully";
                    $mailmessage = "Email Sent Successfully";
                    echo "<script type='text/javascript'>alert('$mailmessage');</script>";
                }
                else{
                    //echo "Message could not be sent";
                    $errormessage = "Email Not Sent Successfully";
                    echo "<script type='text/javascript'>alert('$errormessage');</script>";
                }
                header('location:batch.php');
            }
                else{
                    echo "error :".$sql."<br>".$connection->error;
                }

                
        }
        else
        {
            $message = "Invalid ID number, Please check again";
        echo "<script type='text/javascript'>alert('$message');</script>";
        }
   

    
    mysqli_close($connection);
    }
    ?>




            </div>
     </body>
</html>