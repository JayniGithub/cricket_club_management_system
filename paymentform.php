<!--Email-->
<?php 

$connection = mysqli_connect("localhost","root","","myproject");

if(isset($_POST['submit'])){
    $mid = $_POST['txt'];
    $name = $_POST['txt1'];
    $mail = $_POST['txt4'];
    $rno = $_POST['txt2'];
    $ano = $_POST['txt3'];

    $to = $mail;
    $subject = "Annual Membership Payments";
    $message = "Member ID :".$mid."\n"."Name :".$name."\n"."Reference No :".$rno."\n"."Account No:".$ano."\n"."Thank You... Your Payment has been Successfully Done!!!";
    $headers = "From : jayanihettiarachchi98@gmail.com";

    $retval = mail($to,$subject,$message,$headers);

    if($retval == true){
        echo "Message Sent Successfully";
    }
    else{
        echo "Message could not be sent";
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
    <link rel="stylesheet" href="css/paymentform.css">
    
</head>
<body>
    <div class="heading">
        <center><h1>Payment Form</h1></center>
    </div>
    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
        <fieldset>
            <p>
                <lable class="lbl">Member ID    :</lable>
                <span><input type="text" class="field" name="txt" Placeholder="Enter Member ID..."></span>
            </p>

            <p>
                <lable class="lbl">Name    :</lable>
                <span><input type="text" class="field" name="txt1" Placeholder="Enter Name..."></span>
            </p>

            <p>
                <lable class="lbl">Email Address    :</lable>
                <span><input type="text" class="field" name="txt4" Placeholder="Enter Email..."></span>
            </p>

            <p>
            <lable class="lbl">Batch Type:</lable>
               <span><select class="field"   name="btype">
                    <option value="regular" selected>Regular</option>
                    <option value="vacation">Vacation</option>
                </select></span>
            </p>

            <p>
            <lable class="lbl">Batch Timing :</lable>
                <span><select class="field"  name="btime">
                    <option value="8:00-12:00">08.00a.m - 12.00p.m</option>
                    <option value="2:00-6:00">02.00p.m - 06.00p.m</option>
                </select></span>
            </p>
            
            <p>
                <lable class="lbl">Reference No    :</lable>
                <span><input type="text" class="field" name="txt2" Placeholder="Enter Reference No..."></span>
            </p>

            <p>
                <lable class="lbl">Account No    :</lable>
                <span><input type="text" class="field" name="txt3" Placeholder="Enter Bank Account No..."></span>
            </p>

            <p>
                <lable class="lbl">Attachement    :</lable>
                <span><input type="file" class="field" name="image" Placeholder="Attach the image..."></span>
            </p>

            <p>
                <input type="submit" class="button" name="submit" value="Submit">
            </p>
            

        </fieldset>
        </form>
    </div>
</body>
</html>

<?php 

    $connection = mysqli_connect("localhost","root","","myproject");

    if(isset($_POST['submit'])){

        $file_name = $_FILES['image']['name'];
        $file_type = $_FILES['image']['type'];
        $file_size = $_FILES['image']['size'];
        $temp_name = $_FILES['image']['tmp_name'];

        $upload_to = 'images/';

        move_uploaded_file($temp_name,$upload_to.$file_name);

        $query = "INSERT INTO image(member_id,name,email,btype,btime,ref_no,acc_no,attach)
        VALUE('$_POST[txt]','$_POST[txt1]','$_POST[txt4]','$_POST[btype]','$_POST[btime]','$_POST[txt2]','$_POST[txt3]','$file_name')";

        if($result = mysqli_query($connection,$query)){

            echo '<script type = text/javascript>alert("Successfully Added")</script>';

        }else{

            echo '<script type = text/javascript>alert("Unsuccessful")</script>';
            
        }

    }

    mysqli_close($connection);

?>