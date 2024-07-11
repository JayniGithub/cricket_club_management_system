<!DOCTYPE html>
<html>
    <head>
        <title>Matara Cricket Club</title>
        <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://kit.fontawesome.com/87feef948c.js"></script>
    </head>
    <body>
        <section class="first">
        <div class="main">
            <div class="navbar">
                <div class="logo">
                    <h2>MCC</h2>
                </div>
                <div class="menu">
                    <ul class="menu-list">
                        <li class="litem"><a class="alink" href="about.html">About Us</a></li>
                        <li class="litem"><a class="alink" href="member.php">Member Registration</a></li>
                       <!-- <li><a href="batch.php">Batch Registration</a></li>-->
                        <li class="litem"><a class="alink" href="calendar.php">Ground Booking</a></li>
                        <li class="litem"><a class="alink" href="login.php">Admin Login</a></li>
                        <li class="litem"><a class="alink" href="paytab.php">Payment Forms</a></li>
                        <li class="litem"><a class="alink" href="gallery.html">Gallery</a></li>
                    </ul>
                </div>
               
            </div>
            <div class="content">
                <h1>MATARA <br> CRICKET <br> CLUB</h1>
                <p class="par">Matara Sports Club was a first-class cricket team in Sri Lanka. It played first-class cricket 1998 to 2001. <br>It was demoted to Division II in 2002, and to Division III in 2014.

                    The Uyanwatte ground is home to Matara Cricket Club. <br>In the parlour of cricket Matara stands for one thing only, the modern master blaster Sanath Jayasuriya.<br> Jayasuriya played his early cricket here, is revered in the area and is now the MP for the Matara district.</p>
            </div>
        </div>
        </section>

        <br>

    <section class="second">

        <center><h1>Coaches we have...</h1></center>

        <h4 class="para">
            We got very talented coaches for our practices. It is a great chance to you to practice with them. 
            They are very talented and experienced coaches. 
            There are few of details you can see in here. You can sharpe your talents under this consultants. Hurry up, Don't be late...
        </h4>

        <br>

    <div class="container py-5">
        <div class="row">

        <?php
        
            $connection = mysqli_connect("localhost","root","","myproject");

            $query = "SELECT * FROM coaches ";
            $query_run = mysqli_query($connection,$query); 
            $check_coach = mysqli_num_rows($query_run) > 0;

            if($check_coach){
                
                while($result = mysqli_fetch_array($query_run)){

                    ?>

                    <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <img src="../cricket_club_management_system/coaches/<?php echo $result['image'];?>" alt="coach images" class="card-img-top">
                                <h2 class="card-title"><?php  echo $result['name'];?></h2>
                                <p class="card-text">
                                    <?php  echo $result['details'];?>
                                </p>
                            </div>
                        </div>
                    </div>

                    <?php                    
                }

            }
            else{
                echo "No Coaches to Display";
            }
        
        ?>

            
        </div>
    </div>
        
    <footer>
        <div class="frow">
            <div class="col">
                <img src="img/MCC.png" class="img-logo">
                
            </div>
            <div class="col">
                <h3>Office <div class="underline"><span></span></div></h3>
                <p> Edmond Samarasekara Mawatha</p>
                <p> Matara</p>
                <p class="email-id">mataracricketclub@gmail.com</p>
                <h4>070 218 4814</h4>
            </div>
            <div class="col">
                <h3>Links<div class="underline"><span></span></div></h3>
                <ul class="ulist">
                    <li class="list"><a class="link" href="#">Home</a></li>
                    <li class="list"><a class="link" href="#">About Us</a></li>
                    <li class="list"><a class="link" href="#">Member Registration</a></li>
                    <li class="list"><a class="link" href="#">Ground Booking</a></li>
                    <li class="list"><a class="link" href="#">Admin Login</a></li>
                    <li class="list"><a class="link" href="#">Payment Forms</a></li>
                    <li class="list"><a class="link" href="#">Gallery</a></li>
                </ul>               
            </div>
            <div class="col">
                <h3>Newsletter<div class="underline"><span></span></div></h3>
                <form>
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" placeholder="   Enter Your Email here..." required>
                    <button type="submit"><i class="fa-solid fa-arrow-right"></i></button>
                </form>
                <div class="socialmedia-icons">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-whatsapp"></i>
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-twitter"></i>
                </div>
            </div>
        </div>
        <hr class="hrline">
        <p class="copyright">JKCreations © 2021 - All Rights Reserved </p>
    </footer>
    </section>

    </body>
</html>