<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/membershippayments.css">
    <title>Matara Cricket Club</title>
</head>
<body>
    
    <center><h1>Membership Payments</h1>

    <form action="" method="post">

        <p>
            <input type="text" name="text1" placeholder="Enter Booking ID...">
            <button type="submit" name="search" value="search">Search</button>
        </p>

    </form>

    <div class="cls">
        <center><a href="admin.php" class="link">Back To Dashboard</a></center>
    </div>

    <br>

    <table>
        <tr>
            <th>Member ID</th>
            <th>Name</th>
            <th>Reference No</th>
            <th>Account No</th>
            <th>Image</th>
        </tr>

        <?php 
        
            $connection = mysqli_connect("localhost","root","","myproject");

            if(isset($_POST['search'])){

                $id = $_POST['text1'];


            $query = "SELECT * FROM membership_fee WHERE memberid = '$id'";

            $query_run = mysqli_query($connection,$query);

            while($result = mysqli_fetch_array($query_run)){
                ?>

                    <tr>
                        <td><?php echo $result['memberid'];?></td>
                        <td><?php echo $result['name'];?></td>
                        <td><?php echo $result['ref_no'];?></td>
                        <td><?php echo $result['acc_no'];?></td>
                        <td><img src="../cricket_club_management_system/member_fee/<?php echo $result['image'];?>" style="width:100px;height:100px;" alt="" ></td>
                    </tr>


                <?php
            }
        }else{

                $query = "SELECT * FROM membership_fee";

                $query_run = mysqli_query($connection,$query);
    
                while($result = mysqli_fetch_array($query_run)){
                    ?>
    
                        <tr>
                            <td><?php echo $result['memberid'];?></td>
                            <td><?php echo $result['name'];?></td>
                            <td><?php echo $result['ref_no'];?></td>
                            <td><?php echo $result['acc_no'];?></td>
                            <td><img src="../cricket_club_management_system/member_fee/<?php echo $result['image'];?>" style="width:100px;height:100px;" alt="" ></td>
                        </tr>

            <?php
            }
        }
        ?>

    </table>
    </center>

    
</body>
</html>