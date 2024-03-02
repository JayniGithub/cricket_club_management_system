<?php
    $connection = mysqli_connect("localhost","root","","myproject");

    $no = $_GET['id'];

    $query = "SELECT * FROM calc WHERE item_no = '$no'";

    $sql = mysqli_query($connection,$query);

    while($result=mysqli_fetch_array($sql)){

   
?>

<!Doctype html>
<html>
    <head>
        <title>Matara Cricket Club - Admin</title>
        <link rel="stylesheet" href="css/updatefee.css">
    </head>
    <body>
       
        <div class="main">
            <form action="epdatefeeprocess.php?item_no=<?php echo $no;?>" method="post">
                <fieldset>
                    <legend><h1>Update Fee</h1></legend>
                        
                        <p>
                            
                            <span><input type="hidden" class="field" name="txt" value="<?php echo $result['item_no']?>"/></span>

                        </p>
                    
                        <p>
                            <lable class="lbl">Annual Member Fee    :</lable>
                            <span><input type="text" class="field" name="txt1" value="<?php echo $result['member_fee']?>"/></span>

                        </p>

                        <p>
                            <lable class="lbl">Ground Booking Fee   :</lable>
                            <span><input type="text" class="field" name="txt2" value="<?php echo $result['ground_fee']?>"></span>
                        </p>

                        <p>
                            <lable class="lbl">Membership Fee   :</lable>
                            <span><input type="text" class="field" name="txt3" value="<?php echo $result['reg_fee']?>"></span>
                        </p>

                        <p>
                            <button class="btn" type="submit" name="submit">Update</button>
                            <span><button class="btn" type="submit" name="cancel">Cancel</button></span>
                        </p>
                </fieldset>
            </form>

        </div>
    </body>
</html>

<?php
    }
?>
