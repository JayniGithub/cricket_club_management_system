<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matara Cricket Club - Admin</title>
    <link rel="stylesheet" href="css/showbatchdtls.css">
</head>
<body>
    <div class="heading"><center><h1>Batch Details</h1></center></div>
    <br>

    <div class="main">
        <form action="" method="post">
            <center>
            <input type="text" class="textfield" name="txt" placeholder="Enter member id here...">
            <button type="submit" name="search" value="search">Search</button>
            </center>
        </form>
    </div>
<br>
    <center>
    <table>
                    <tr>
                        <th>Member ID</th>
                        <th>Name</th>
                        <th>Contact No</th>
                        <th>Batch Type</th>
                        <th>Batch Time</th>
                        <th>Edit</th>
                        
                    </tr>

    <?php
    
        $connection = mysqli_connect("localhost","root","","myproject");

        if(isset($_POST['search'])){

            $id=$_POST['txt'];

            $sql = "SELECT * FROM batch_regi WHERE member_id='$id'";

            $query = mysqli_query($connection,$sql);

            while($result=mysqli_fetch_array($query)){
                ?>


                    <tr>
                        <td><?php echo $result['member_id'];?></td>
                        <td><?php echo $result['name'];?></td>
                        <td><?php echo $result['contact_no'];?></td>
                        <td><?php echo $result['type'];?></td>
                        <td><?php echo $result['batch_time'];?></td>
                        <td><a href = "editbatch.php?no=<?php echo $result['member_id'];?>">Edit</a></td>
                        
                    </tr>

                

                <?php
            }

        }
        else{

            $sql_query = "SELECT * FROM batch_regi";

            $sql_run = mysqli_query($connection,$sql_query);

            while($row=mysqli_fetch_array($sql_run)){
        
            ?>
               
               <tr>
                    <td><?php echo $row['member_id'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['contact_no'];?></td>
                    <td><?php echo $row['type'];?></td>
                    <td><?php echo $row['batch_time'];?></td>
                    <td><a href = "editbatch.php?no=<?php echo $row['member_id'];?>">Edit</a></td>
               </tr>


            <?php
                
            }
        }

    ?>
    </table>
<br>
        <div class="part1"><h1>Regular Batch Details</h1></div>
       

        

        <table>
            <tr>
                <th>Member ID</th>
                <th>Name</th>
                <th>Contact No</th>
                <th>Batch Type</th>
                <th>Batch Time</th>
            </tr>

            <?php
    
    $connection = mysqli_connect("localhost","root","","myproject");


        $sql = "SELECT * FROM batch_regi WHERE type='regular'";

        $query = mysqli_query($connection,$sql);

        while($result=mysqli_fetch_array($query)){
            ?>


                <tr>
                    <td><?php echo $result['member_id'];?></td>
                    <td><?php echo $result['name'];?></td>
                    <td><?php echo $result['contact_no'];?></td>
                    <td><?php echo $result['type'];?></td>
                    <td><?php echo $result['batch_time'];?></td>
                </tr>

            

            <?php
        }

   ?>

        </table>
        <br>
        
        <div class="part1"><h1>Vacation Batch Details</h1></div>
        
        <table>
            <tr>
                <th>Member ID</th>
                <th>Name</th>
                <th>Contact No</th>
                <th>Batch Type</th>
                <th>Batch Time</th>
            </tr>

            <?php
    
    $connection = mysqli_connect("localhost","root","","myproject");


        $sql = "SELECT * FROM batch_regi WHERE type='vacation'";

        $query = mysqli_query($connection,$sql);

        while($result=mysqli_fetch_array($query)){
            ?>


                <tr>
                    <td><?php echo $result['member_id'];?></td>
                    <td><?php echo $result['name'];?></td>
                    <td><?php echo $result['contact_no'];?></td>
                    <td><?php echo $result['type'];?></td>
                    <td><?php echo $result['batch_time'];?></td>
                </tr>

            

            <?php
        }

   ?>

        </table>
    </center>


</body>
</html>