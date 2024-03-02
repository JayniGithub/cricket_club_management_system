<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/editadmin.css">
    <title>Matara Cricket Club - Admin</title>
</head>
<body>
    
    <?php

        $connection = mysqli_connect("localhost","root","","myproject");

        $id = $_GET['id'];

        $query = "SELECT * FROM admin WHERE admin_id='$id'";

        $query_run = mysqli_query($connection,$query);

        while($result=mysqli_fetch_array($query_run)){
            ?>

                <form action="editadminprocess.php" method="post">
                <fieldset>
                    <legend><h1>ADMIN DETAILS</h1></legend>
                    <p>
                        <input type="text" class="textf" name="adminid" value="<?php echo $result['admin_id'];?>">
                    </p>

                    <p>
                        <input type="text" class="textf" name="fname" value="<?php echo $result['fname'];?>">
                    </p>

                    <p>
                        <input type="text" class="textf" name="lname" value="<?php echo $result['lname'];?>">
                    </p>

                    <p>
                        <input type="text" class="textf" name="post" value="<?php echo $result['post'];?>">
                    </p>

                    <p>
                        <input type="text" class="textf" name="username" value="<?php echo $result['username'];?>">
                    </p>

                    <p>
                        <input type="password" class="textf" name="password" value="<?php echo $result['password'];?>">
                    </p>

                    <p>
                        <button type="submit" name="submit" class="btn">Update</button>
                        <button type="submit" name="cancel" class="btn1">Cancel</button>
                    </p>
                </fieldset>
                </form>

            <?php
        }

    ?>

</body>
</html>