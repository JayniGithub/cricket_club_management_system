<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bookingpayments.css">
    <title>Matara Cricket Club</title>
</head>
<body>
    
    <center>
        <h1>Ground Booking Payments...</h1>

        <form action="" method="post">
            <p>

                <input type="text" name = "text1" placeholder="Enter Booking ID...">
                <button type="submit" name="search">Search</button>

            </p>

            <div class="cls">
                <center><a href="admin.php" class="link">Back to Dashboard</a></center>
            </div>

            <br>

            <table>
                <tr>
                    <th>Booking ID</th>
                    <th>Name</th>
                    <th>Reference No</th>
                    <th>Account No</th>
                    <th>Image</th>
                </tr>

                <?php 
                
                    $connection = mysqli_connect("localhost","root","","myproject");

                    if(isset($_POST['search'])){

                        $id = $_POST['text1'];

                        $query = "SELECT * FROM booking_fee WHERE booking_id = '$id'";

                        $query_run = mysqli_query($connection,$query);

                        while($result = mysqli_fetch_array($query_run)){
                            ?>

                                <tr>
                                    <td><?php echo $result['booking_id'];?></td>
                                    <td><?php echo $result['name'];?></td>
                                    <td><?php echo $result['ref_no'];?></td>
                                    <td><?php echo $result['acc_no'];?></td>
                                    <td><img src="../cricket_club_management_system/booking/<?php echo $result['image'];?>" style="width:100px; height:100px;" alt="" ></td>
                                </tr>

                            <?php
                        }
                    }else{

                      
                        $query = "SELECT * FROM booking_fee ";

                        $query_run = mysqli_query($connection,$query);

                        while($result = mysqli_fetch_array($query_run)){
                            ?>

                                <tr>
                                    <td><?php echo $result['booking_id'];?></td>
                                    <td><?php echo $result['name'];?></td>
                                    <td><?php echo $result['ref_no'];?></td>
                                    <td><?php echo $result['acc_no'];?></td>
                                    <td><img src="../cricket_club_management_system/booking/<?php echo $result['image'];?>" style="width:100px; height:100px;" alt="" ></td>
                                </tr> 
                            <?php    
                        }
                    }
                
                ?>

            </table>
        </form>
    </center>

</body>
</html>