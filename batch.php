




<!DOCTYPE html>
<html>
    <head>
        <title>Matara Cricket Club</title>
        <link rel="stylesheet" href="css/batch.css">
    </head>
    <body>
        <div class="reg"><h1>Batch Registration</h1></div>
        <div class="main">

        <form action="" method="post">
            <input type="text" class="field1" name="id" placeholder="Enter NIC number..">
            <button type="submit" class="btn" name="search" value="search">Search</button>
            </form>

            <?php
                $connection = mysqli_connect("localhost","root","","myproject");

                if(isset($_POST['search'])){
                    $id=$_POST['id'];

                    $query="SELECT member_id,name,contact_no FROM member WHERE id='$id'";

                    $query_run=mysqli_query($connection,$query);
                

                while($result=mysqli_fetch_array($query_run)){
                    ?>

                        
                        <form action="" method="POST">

                            <h2 class="lable">Member ID :</h2>
                            <input type="text" class="field" name="mid" value="<?php echo $result['member_id'];?>">

                            <h2 class="lable">Name :</h2>
                            <input type="text" class="field" name="name" value="<?php echo $result['name'];?>">

                            <h2 class="lable">Contact No :</h2>
                            <input type="text" class="field"  name="contact" value="<?php echo $result['contact_no'];?>">

                            <h2 class="lable">Batch Type:</h2>
                            <select class="box"   name="btype">
                                <option value="regular" selected>Regular</option>
                                <option value="vacation">Vacation</option>
                            </select>

                            <h2 class="lable">Batch Timing :</h2>
                            <select class="box"  name="btime">
                                <option value="8:00-12:00">08.00a.m - 12.00p.m</option>
                                <option value="2:00-6:00">02.00p.m - 06.00p.m</option>
                            </select>


                            <br>

                            <button type="submit" name="submit" value="submit" class="btn1">Submit</button>
                            <button type="submit" name="cancel" class="btn2">Cancel</button>

                        </form>

                        
                    <?php
                }

            }
            
            ?>

                        <?php
                            $connection = mysqli_connect("localhost","root","","myproject");

                            if(isset($_POST['submit'])){

                                $sql="INSERT INTO  batch_regi(member_id,name,contact_no,type,batch_time,row_no) 
                                VALUES('$_POST[mid]','$_POST[name]','$_POST[contact]','$_POST[btype]','$_POST[btime]',null)";

                                if($query=mysqli_query($connection,$sql)){
                                    header('Location:index.php');
                                }
                                else{
                                    echo "error :".$sql."<br>".$connection->error;
                                }

                                mysqli_close($connection);
                            }
                        ?>




    



        </div>
    </body>
</html>