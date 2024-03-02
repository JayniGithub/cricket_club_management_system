<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/editbatch.css">
    <title>Matara Cricket Club - Admin</title>
</head>
<body>

    <?php 
    
        $connection = mysqli_connect("localhost","root","","myproject");

        $id = $_GET['no'];

        $query = "SELECT * FROM batch_regi WHERE member_id = '$id'";

        $query_run = mysqli_query($connection,$query);

        while($result = mysqli_fetch_array($query_run)){

            ?>

            <form action="" method="post">
                <fieldset>
                    <legend><h1>Batch Details</h1></legend>

                            <h2 class="lable">Member ID :</h2>
                            <input type="text" class="field" name="mid" value="<?php echo $result['member_id'];?>">

                            <h2 class="lable">Name :</h2>
                            <input type="text" class="field" name="name" value="<?php echo $result['name'];?>">

                            <h2 class="lable">Contact No :</h2>
                            <input type="text" class="field"  name="contact" value="<?php echo $result['contact_no'];?>">

                            <h2 class="lable">Batch Type:</h2>
                            <select class="box"   name="btype" value="<?php echo $result['type'];?>">
                                <option value="regular" >Regular</option>
                                <option value="vacation">Vacation</option>
                            </select>

                            <h2 class="lable">Batch Timing :</h2>
                            <select class="box"  name="btime" value="<?php echo $result['batch_time'];?>">
                                <option value="8:00-12:00">08.00a.m - 12.00p.m</option>
                                <option value="2:00-6:00">02.00p.m - 06.00p.m</option>
                            </select>


                            <br>

                            <button type="submit" name="submit" value="submit" class="btn1">Update</button>
                            <button type="submit" name="cancel" class="btn2">Cancel</button>


                </fieldset>
            </form>

            <?php
        }
    
    ?>

</body>
</html>