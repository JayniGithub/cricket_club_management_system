<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/adminDetails.css">
    <title>Matara Cricket Club - Admin</title>
</head>
<body>
    <center><div class="heading"><h1>Admin Details</h1></div>
    <br>
    <div class="cls">
    <a href="addadmin.php" class="link"> Add New Admin</a>
    
    <br><br>
    
   <a href="admin.php" class="btn">Back To Dashboard</a>
   </div>
    <br><br>

    <table>
        <tr>
            <th>Admin ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Post</th>
            <th>Username</th>
            <th>Password</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>

    <?php

        $connection = mysqli_connect("localhost","root","","myproject");

        $query = "SELECT * FROM admin";

        $query_run = mysqli_query($connection,$query);

        while($result=mysqli_fetch_array($query_run)){
            ?>

            <tr>
                <td><?php echo $result['admin_id'];?></td>
                <td><?php echo $result['fname'];?></td>
                <td><?php echo $result['lname'];?></td>
                <td><?php echo $result['post'];?></td>
                <td><?php echo $result['username'];?></td>
                <td><?php echo $result['password'];?></td>
                <td><a href="editadmin.php?id=<?php echo $result['admin_id'];?>">Edit</a></td>
                <td><a href="deleteadmin.php?id=<?php echo $result['admin_id'];?>">Delete</a></td>
            </tr>

            <?php
        }


    ?>


    </table>
    </center>
</body>
</html>