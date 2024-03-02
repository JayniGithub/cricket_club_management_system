<!DOCTYPE html>
<html>
    <head>
        <title>Matara Cricket Club - Admin</title>
        <link rel="stylesheet" href="css/showmember.css">
    </head>

    <body>
        <div class="heading"><center><h1>CLUB MEMBERS</h1></center></div>
        <div class="main">
            <form action="" method="post">
                <p><center>
                    <input type="text" name="text1" placeholder="Enter NIC number...">
                    <button type="submit" name="search">Search</button>
                    </center>
                </p>
            </form>


            <table>
                <tr>
                    <th>Member ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Date of Birth</th>
                    <th>NIC</th>
                    <th>Contact No</th>
                    <th>Number of years</th>
                    <th>Member Fee</th>
                    <th>Address</th>
                </tr>
            

            <?php
               $connection = mysqli_connect("localhost","root","","myproject");

                if(isset($_POST['search'])){

                    $no=$_POST['text1'];

                    $query = "SELECT * FROM member WHERE id ='$no'";

                    $query_run = mysqli_query($connection,$query);

                    while($result=mysqli_fetch_array($query_run)){

                        ?>

                        <tr>
                            <td><?php echo $result['member_id'];?></td>
                            <td><?php echo $result['name'];?></td>
                            <td><?php echo $result['email'];?></td>
                            <td><?php echo $result['dob'];?></td>
                            <td><?php echo $result['id'];?></td>
                            <td><?php echo $result['contact_no'];?></td>
                            <td><?php echo $result['no_of_years'];?></td>
                            <td><?php echo $result['member_fee'];?></td>
                            <td><?php echo $result['address'];?></td>
                        </tr>


                    <?php
                    }
                }

                    else{

                        $sql = "SELECT * FROM member";

                        $sql_run = mysqli_query($connection,$sql);

                        while($row=mysqli_fetch_array($sql_run)){

                            ?>

                        <tr>
                            <td><?php echo $row['member_id'];?></td>
                            <td><?php echo $row['name'];?></td>
                            <td><?php echo $row['email'];?></td>
                            <td><?php echo $row['dob'];?></td>
                            <td><?php echo $row['id'];?></td>
                            <td><?php echo $row['contact_no'];?></td>
                            <td><?php echo $row['no_of_years'];?></td>
                            <td><?php echo $row['member_fee'];?></td>
                            <td><?php echo $row['address'];?></td>
                        </tr>

                        <?php
                        }
                    }
                
            ?>
            </table>
        </div>
    </body>

</html>