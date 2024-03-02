<?php
$connection = new mysqli("localhost","root","","myproject");

if(isset($_POST['submit']))
{
    $user_unsafe=$_POST['username'];
    $pass_unsafe=$_POST['password'];

    $user = mysqli_real_escape_string($connection, $user_unsafe);
    $pass = mysqli_real_escape_string($connection, $pass_unsafe);

    $query = mysqli_query($connection, "SELECT *FROM admin WHERE username='$user' AND password='$pass'") or die(mysqli_error($connection));

    $row = mysqli_fetch_array($query);

    $name = $row['username'];
    $counter=mysqli_num_rows($query);
    $id=$row['admin_id'];

    if($counter == 0)
    {
        echo "<script type=''text/javascript>alert('Invalid Username or Password!'); document.location='login.php'</script>";
    }
    else
    {
        $_SESSION['admin_id']=$id;
        $_SESSION['username']=$name;

        echo "<script type='text/javascript'>document.location='admin.php'</script>";
    }
}

?>
