<!DOCTYPE html>
<html>
    <head>
        <title>Matara Cricket Club</title>
        <link rel="stylesheet" href="css/editadmin.css">
    </head>
    <body>
        <div class="admin">
            <form action="" method="post">
                <fieldset>
                    <legend><h1>ADMIN DETAILS</h1></legend>
                    <p>
                        <input type="text" class="textf" name="adminid" placeholder="Admin_id">
                    </p>

                    <p>
                        <input type="text" class="textf" name="fname" placeholder="First Name">
                    </p>

                    <p>
                        <input type="text" class="textf" name="lname" placeholder="Last Name">
                    </p>

                    <p>
                        <input type="text" class="textf" name="post" placeholder="Post">
                    </p>

                    <p>
                        <input type="text" class="textf" name="username" placeholder="Username">
                    </p>

                    <p>
                        <input type="password" class="textf" name="password" placeholder="Password">
                    </p>

                    <p>
                        <button type="submit" name="submit" class="btn">Submit</button>
                        <button type="submit" name="cancel" class="btn1">Cancel</button>
                    </p>
                </fieldset>
            </form>


            <?php 
                $connection = mysqli_connect("localhost","root","","myproject");

                if (!$connection) {
                    die("Connection failed: " . mysqli_connect_error());
                  }

                if(isset($_POST['submit'])){

                    $sql = "INSERT INTO admin(admin_id,fname,lname,post,username,password) 
                    VALUES('$_POST[adminid]','$_POST[fname]','$_POST[lname]','$_POST[post]','$_POST[username]','$_POST[password]')";

                    if(mysqli_query($connection,$sql)){
                        echo "Added Successfully";
                     

                    }
                    else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
                      }

                    mysqli_close($connection);
                }
                
            ?>






        </div>
    </body>
</html>