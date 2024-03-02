<!DOCTYPE html>
<html>
    <head>
        <title>Matara Cricket Club</title>
        <link rel="stylesheet" href="css/login.css">
    </head>
    <body>
        <div class="login">
            <form action="loginprocess.php" method="POST">
                <fieldset>
                    <legend><h1>LOGIN PAGE</h1></legend>

                    <?php
                    
                        if(isset($error) && !empty($error)){
                            echo '<p class="errors">Invalid Username or Password</p>';
                        }
                
                    ?>


                    <p>
                        <input type="text" class="txtf" name="username" placeholder="Username">
                    </p>

                    <p>
                        <input type="password" class="txtf" name="password" placeholder="Password">
                    </p>

                    <p>
                        <button type="submit" name="submit" class="btn" >LOGIN</button>
                        <!--<input type="submit" name="submit" value="Login">-->
                    </p>
                </fieldset>
            </form>
        </div>
    </body>
</html>