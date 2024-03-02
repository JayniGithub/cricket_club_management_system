<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/groundbookings.css">
    <title>Matara Cricket Club - Ground Bookings</title>
</head>
<body>
    
    <div class="heading">
        <center><h1>Ground Bookings</h1></center>
    </div>

    <div class="f1">
        <form action="" method="post">
            <center>
            <div class="search1">
                <input type="text" class="field" name="text1" placeholder="Enter Booking ID here...">
                <button type="submit" class="btn" value="search" name="search">Search</button>
                <!--<input type="button" class="btn" value="Search" name="search">-->
            </div>
                <br>
            <div class="tbl">
                <table>
                    <tr>
                        <th>Booking ID</th>
                        <th>Name</th>
                        <th>NIC</th>
                        <th>Email</th>
                        <th>Contact No</th>
                        <th>Purpose</th>
                        <th>Booking Date</th>
                        <th>End Date</th>
                        <th>No of Days</th>
                        <th>Amount</th>
                        <!--<th>Edit</th>-->
                        <th>Delete</th>
                    </tr>

                    <?php
                    
                        $connection = mysqli_connect("localhost","root","","myproject");

                        if(isset($_POST['search'])){

                            $no = $_POST['text1'];

                            $query1 = "SELECT * FROM ground_booking WHERE booking_id = '$no'";

                            $query_run1 = mysqli_query($connection,$query1);
    
                            while($result1=mysqli_fetch_array($query_run1)){
                                ?>
    
                                <tr>
                                    <td><?php echo $result1['booking_id'];?></td>
                                    <td><?php echo $result1['name'];?></td>
                                    <td><?php echo $result1['nic'];?></td>
                                    <td><?php echo $result1['email'];?></td>
                                    <td><?php echo $result1['contact_no'];?></td>
                                    <td><?php echo $result1['purpose'];?></td>
                                    <td><?php echo $result1['booking_date'];?></td>
                                    <td><?php echo $result1['end_date'];?></td>
                                    <td><?php echo $result1['no_of_days'];?></td>
                                    <td><?php echo $result1['amount'];?></td>
                                    <!--<td><a href="#">Edit</td>-->
                                    <td><a href="deletebooking.php?id=<?php echo $result1['booking_id'];?>">Delete</td>
                                </tr>
    
                                <?php
                            }

                        }
                        else{

                            $query = "SELECT * FROM ground_booking";

                        $query_run = mysqli_query($connection,$query);

                        while($result=mysqli_fetch_array($query_run)){
                            ?>

                            <tr>
                                <td><?php echo $result['booking_id'];?></td>
                                <td><?php echo $result['name'];?></td>
                                <td><?php echo $result['nic'];?></td>
                                <td><?php echo $result['email'];?></td>
                                <td><?php echo $result['contact_no'];?></td>
                                <td><?php echo $result['purpose'];?></td>
                                <td><?php echo $result['booking_date'];?></td>
                                <td><?php echo $result['end_date'];?></td>
                                <td><?php echo $result['no_of_days'];?></td>
                                <td><?php echo $result['amount'];?></td>
                               <!-- <td><a href="#">Edit</td>-->
                               <td><a href="deletebooking.php?id=<?php echo $result['booking_id'];?>">Delete</td>
                            </tr>

                            <?php
                        }
                    }
                    ?>

                        
                        
                </table>
            </div>
                    </center>
        </form>
    </div>

</body>
</html>