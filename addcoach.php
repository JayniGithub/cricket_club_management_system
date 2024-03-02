<?php

    $connection = mysqli_connect("localhost","root","","myproject");

    $no = $_GET['id'];

    $sql = "SELECT * FROM coaches WHERE coachid = '$no'";

    $query = mysqli_query($connection,$sql);

    while($result=mysqli_fetch_array($query)){

   


?>



<!DOCTYPE html>
<html>
    <head>
        <title>Matara Cricket Club - Admin</title>
        <link rel="stylesheet" href="css/addcoach.css">
    </head>
    <body>
        <div class="addnew">
            <form action="coachupdate.php?coachid=<?php echo $no?>" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend><h1>Add New Coach</h1></legend>

                    <p>
                        <input type="hidden" class="textfield" name="coachid"  value="<?php echo $result['coachid'];?>">
                    </p>

                    <p>
                        <lable class="lbl">Name :</lable>
                        <input type="text" class="textfield" name="name" placeholder="Enter Name..." value="<?php echo $result['name'];?>">
                    </p>

                    <p>
                        <lable class="lbl">Birth Date :</lable>
                        <input type="date" class="textfield" name="bday" placeholder="Enter Birth Date..." value="<?php echo $result['bday'];?>">
                    </p>

                    <p>
                        <lable class="lbl">Contact No :</lable>
                        <input type="text" class="textfield" name="contact"  placeholder="Enter Phone No..." value="<?php echo $result['contact'];?>">
                    </p>

                    <p>
                        <lable class="lbl">NIC :</lable>
                        <input type="text" class="textfield" name="nic" placeholder="Enter NIC..." value="<?php echo $result['nic'];?>">
                    </p>

                    <p>
                        <lable class="lbl">Address :</lable>
                        <input type="text" class="textfield" name="address" placeholder="Enter Address..." value="<?php echo $result['address'];?>">
                    </p>

                    <p>
                        <lable class="lbl">Email :</lable>
                        <input type="email" class="textfield" name="email" placeholder="Enter Email..." value="<?php echo $result['email'];?>">
                    </p>

                    <p> <lable class="lbl">Batch Type   :</lable>
                            <select class="textfield"   name="btype" value="<?php echo $result['btype'];?>">
                                <option value="regular" selected>Regular</option>
                                <option value="vacation">Vacation</option>
                            </select>
                    </p>        

                    <p><lable class="lbl">Batch Timing  : </lable>
                            <select class="textfield"  name="btime" value="<?php echo $result['btime'];?>">
                                <option value="8:00-12:00">08.00a.m - 12.00p.m</option>
                                <option value="2:00-6:00">02.00p.m - 06.00p.m</option>
                            </select>
                    </p>

                    <p>
                        <lable class="lbl">Details :</lable>
                        <input type="text" class="textfield" name="details" placeholder="Enter Details..." value="<?php echo $result['details'];?>">
                    </p>

                    <p>
                        <lable class="lbl">Profile Photo :</lable>
                        <input type="file" class="textfield" name="image" value="<?php echo $result['image'];?>">
                    </p>


                    <p>
                        <button type="submit" name="submit" class="btn1">Update</button>
                        <button type="submit" name="cancel" class="btn2">Cancel</button>
                    </p>
                </fieldset>
            </form>
        </div>
    </body>
</html>

<?php
        }
    ?>

