
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
        <center><h1>Payment Form for Ground Booking Fee</h1></center>
    </div>
    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">
        <fieldset>
            <p>
                <lable class="lbl">Booking ID    :</lable>
                <span><input type="text" class="field" name="txt" Placeholder="Enter Booking ID..." value="<?php if(isset($_POST['txt'])) echo $_POST['txt'];?>"></span>
                <button type="submit" class="button" name="search" value="search">Search</button>
            </p>
        
        <!--</form>-->
        <?php
        
            $connection = mysqli_connect("localhost","root","","myproject");
            if(isset($_POST['search'])){
                $bid=$_POST['txt'];

                $sql="SELECT name FROM ground_booking WHERE booking_id='$bid'";

                $sql_run=mysqli_query($connection,$sql);
            

            while($resultset=mysqli_fetch_array($sql_run)){
        ?>    

           
                
            <p>
                <lable class="lbl">Customer Name    :</lable>
                <span><input type="text" class="field" name="txt1" value="<?php echo $resultset['name'];?>"></span>
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
        <?php
        
            }
        }
        
        ?>
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

        $upload_to = 'booking/';

        move_uploaded_file($temp_name,$upload_to.$file_name);

        $query = "INSERT INTO booking_fee(booking_id,name,ref_no,acc_no,image)
        VALUE('$_POST[txt]','$_POST[txt1]','$_POST[txt2]','$_POST[txt3]','$file_name')";

        if($result = mysqli_query($connection,$query)){

            echo '<script type = text/javascript>alert("Successfully Added")</script>';
            header('Location:paytab.php');
        }
        else{

            echo '<script type = text/javascript>alert("Unsuccessful")</script>';
            
        }

    }

    mysqli_close($connection);



?>