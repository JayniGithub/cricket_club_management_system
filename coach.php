<!DOCTYPE html>
<html>
    <head>
        <title>Matara Cricket Club - Admin</title>
        <link rel="stylesheet" href="css/coachdetails.css">
    </head>
    <body>
        <h1><center>Coach Details</center></h1>

        <center><a href="admin.php" class="button">Back To Dashboard</a></center>
        <!-- <center><button type="submit" class="btn" name="submit"><a href="admin.php">Back to Dashboard</a></button></center>-->

        <br>
        
        <center><a href="newcoach.php" class="link">Add New Coach</a></center>
        
        <br>


        <form action="" method="post" enctype="multipart/form-data">
        <table>
            <tr>
               <th>#</th> 
               <th>Name</th>
               <th>Contact No</th>
               <th>Batch Type</th>
               <th>Batch Time</th>
               <th>Qualifications</th>
               <th>Profile Image</th>
               <th>Edit</th>
               <th>Delete</th>        
            </tr>

            <?php

            $connection = mysqli_connect("localhost","root","","myproject");
            
            $sql = "SELECT coachid, name, contact, btype, btime, details, image FROM coaches";

            $query = mysqli_query($connection,$sql);

            while($row=mysqli_fetch_array($query)){

                ?>

                    <tr>
                        <td><?php echo $row['coachid'];?></td>
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['contact'];?></td>
                        <td><?php echo $row['btype'];?></td>
                        <td><?php echo $row['btime'];?></td>
                        <td><?php echo $row['details'];?></td>
                        <td><img src = "../cricket_club_management_system/coaches/<?php echo $row['image'];?>" style = "width:100px; height:100px;"></td>
                        <td><a href="addcoach.php?id=<?php echo $row['coachid'];?>">Edit</a></td>
                        <td><a href="deletecoach.php?id=<?php echo $row['coachid'];?>">Delete</a></td>
                    </tr>

                <?php
            }
            
            ?>
        </table>
        </form>
    </body>
</html>