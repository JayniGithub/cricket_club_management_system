<!DOCTYPE html>
<html>
    <head>
        <title>Matara Cricket Club - Admin</title>
        <link rel="stylesheet" href="css/fees.css">
    </head>
    <body>

        <form action="" method="post">
            <fieldset>
                <legend><h1>Fee Table</h1></legend>
        
    <?php 
    $connection = mysqli_connect("localhost","root","","myproject");

    $query = "SELECT * FROM calc";

    $query_run = mysqli_query($connection,$query);

    while($result=mysqli_fetch_array($query_run)){
        ?>

            <table>
                <tr>
                    <th>Item No</th>
                    <th>Annual Member Fee</th>
                    <th>Ground Fee</th>
                    <th>Membership Fee</th>
                    <th>Edit</th>
                </tr>
                <tr>
                    <td><?php echo $result['item_no'];?></td>
                    <td><?php echo $result['member_fee'];?></td>
                    <td><?php echo $result['ground_fee'];?></td>
                    <td><?php echo $result['reg_fee'];?></td>
                   <!-- <td><a href="updatefee.php"><button type="submit" name="edit" >Edit</button></a></td>-->
                   <!--<td><button type="submit" name="edit" value="submit" a href="updatefee.php?item_no=<?php echo $result['item_no'];?>">Edit</button></td>-->
                   <td><a href="updatefee.php?id=<?php echo $result['item_no'];?>">Edit</a></td>
                </tr>
            </table>

        <?php
    }
    
?>

            <center><a href="admin.php" class="link">Back To Dashboard</a></center>
<br>

</fieldset>
</form>
    </body>
</html>





