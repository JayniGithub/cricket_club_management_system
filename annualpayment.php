<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/annualpayments.css">
    <title>Matara Cricket Club</title>
</head>
<body>
    
    <center>
        <h1>Annual Membership Payments</h1>

        <form action="" method="post">

            <p>

            <input type="text" name="text1" placeholder="Enter Member ID...">
            <button type="submit" name="search">Search</button>

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
                <th>Batch Type</th>
                <th>Batch Time</th>
                <th>Reference No</th>
                <th>Account No</th>
                <th>Image</th>
            </tr>

            <?php 
            
                $connection = mysqli_connect("localhost","root","","myproject");

                if(isset($_POST['search'])){

                    $id = $_POST['text1'];

                    $sql = "SELECT * FROM image WHERE member_id = '$id'";

                    $sql_run = mysqli_query($connection,$sql);
                    while($result = mysqli_fetch_array($sql_run)){
                        ?>

                        <tr>
                            <td><?php echo $result['member_id'];?></td>
                            <td><?php echo $result['name'];?></td>
                            <td><?php echo $result['btype'];?></td>
                            <td><?php echo $result['btime'];?></td>
                            <td><?php echo $result['ref_no'];?></td>
                            <td><?php echo $result['acc_no'];?></td>
                            <td><img src="../inproject/images/<?php echo $result['attach'];?>" style="width:100px;height:100px;" alt="" ></td>
                        </tr>

                        <?php
                    }

                }else{

                    $sql = "SELECT * FROM image ";

                    $sql_run = mysqli_query($connection,$sql);
                    while($result = mysqli_fetch_array($sql_run)){
                        ?>

                        <tr>
                            <td><?php echo $result['member_id'];?></td>
                            <td><?php echo $result['name'];?></td>
                            <td><?php echo $result['btype'];?></td>
                            <td><?php echo $result['btime'];?></td>
                            <td><?php echo $result['ref_no'];?></td>
                            <td><?php echo $result['acc_no'];?></td>
                            <td><img src="../inproject/images/<?php echo $result['attach'];?>" style="width:100px;height:100px;" alt="" ></td>
                        </tr>

                    <?php
                    }

                }
            
            ?>

        </table>

    </center> 

</body>
</html>