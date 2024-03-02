
<?php

$connection=mysqli_connect("localhost","root","","myproject");

if(isset($_POST['submit'])){

    $no = $_GET['item_no'];

    $query= "UPDATE calc SET item_no='$_POST[txt]', member_fee='$_POST[txt1]',ground_fee='$_POST[txt2]',reg_fee='$_POST[txt3]' WHERE item_no='$_POST[txt]'";

    $query_run=mysqli_query($connection,$query);

    if($query_run){
        echo '<script type="text/javascript"> alert ("updated") </script>';
        header("Location:admin.php");

    }

    else{
        echo '<script type="text/javascript"> alert ("not updated") </script>';
    }

}

?>