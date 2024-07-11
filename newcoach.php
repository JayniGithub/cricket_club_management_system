<!DOCTYPE html>
<html>
    <head>
        <title>Matara Cricket Club - Admin</title>
        <link rel="stylesheet" href="css/addcoach.css">
    </head>
    <body>
        <div class="addnew">
            <form action="" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend><h1>Add New Coach</h1></legend>

                    <p>
                        <input type="hidden" class="textfield" name="name" placeholder="Enter Name..." >
                    </p>

                    <p>
                        <lable class="lbl">Name :</lable>
                        <input type="text" class="textfield" name="name" placeholder="Enter Name..." >
                    </p>

                    <p>
                        <lable class="lbl">Birth Date :</lable>
                        <input type="date" class="textfield" name="bday" placeholder="Enter Birth Date..." >
                    </p>

                    <p>
                        <lable class="lbl">Contact No :</lable>
                        <input type="text" class="textfield" name="contact"  placeholder="Enter Phone No..." >
                    </p>

                    <p>
                        <lable class="lbl">NIC :</lable>
                        <input type="text" class="textfield" name="nic" placeholder="Enter NIC..." >
                    </p>

                    <p>
                        <lable class="lbl">Address :</lable>
                        <input type="text" class="textfield" name="address" placeholder="Enter Address..." >
                    </p>

                    <p>
                        <lable class="lbl">Email :</lable>
                        <input type="email" class="textfield" name="email" placeholder="Enter Email..." >
                    </p>

                    <p> <lable class="lbl">Batch Type   :</lable>
                            <select class="textfield"   name="btype" >
                                <option value="regular" selected>Regular</option>
                                <option value="vacation">Vacation</option>
                            </select>
                    </p>        

                    <p><lable class="lbl">Batch Timing  : </lable>
                            <select class="textfield"  name="btime" >
                                <option value="8:00-12:00">08.00a.m - 12.00p.m</option>
                                <option value="2:00-6:00">02.00p.m - 06.00p.m</option>
                            </select>
                    </p>

                    <p>
                        <lable class="lbl">Details :</lable>
                        <input type="text" class="textfield" name="details" placeholder="Enter Details..." >
                    </p>

                    <p>
                        <lable class="lbl">Profile Photo :</lable>
                        <input type="file" class="textfield" name="image" >
                    </p>

                    <p>
                        <button type="submit" name="insert" class="btn1">Submit</button>
                        <button type="submit" name="cancel" class="btn2">Cancel</button>
                    </p>

                </fieldset>
            </form>


            <?php
            
            $connection = mysqli_connect("localhost","root","","myproject");

            if(isset($_POST['insert'])){

                $file_name = $_FILES['image']['name'];
                $file_type = $_FILES['image']['type'];
                $file_size = $_FILES['image']['size'];
                $temp_name = $_FILES['image']['tmp_name'];
        
                $upload_to = 'coaches/';
        
                move_uploaded_file($temp_name,$upload_to.$file_name);

                $sql = "INSERT INTO coaches (coachid,name,bday,contact,nic,address,email,btype,btime,details,image) 
                VALUES (null,'$_POST[name]','$_POST[bday]','$_POST[contact]','$_POST[nic]','$_POST[address]','$_POST[email]','$_POST[btype]','$_POST[btime]','$_POST[details]','$file_name')";

                if($query=mysqli_query($connection,$sql)){
                    echo '<script type = text/javascript>alert("Successfully Added")</script>';
                    header('Location:admin.php');
                }
                else{
                    echo '<script type = text/javascript>alert("Unsuccessful")</script>';
                }

                mysqli_close($connection);

            }
        ?>


        </div>
    </body>
</html>
