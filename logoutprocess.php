<?php
    session_start();
    if(empty($_SESSION['admin_id']))
        header('Location:index.php');

    
?>
<!DOCTYPE html>
<html>
    <body>
        <div style = "width:150px;margin:auto;height:500px;margin-top:300px">

        <?php 
            $db = new mysqli("localhost","root","","myproject");
            session_destroy();

            echo'<meta http-equiv="refresh" content="2;url=login.php">';
            echo '<progress max=100><strong>progress:60% done.</strong></progress><br>';
            echo '<span class="itext">Logging Out Please Wait!...</span>';
        ?>
    </div>
    </body>
</html>