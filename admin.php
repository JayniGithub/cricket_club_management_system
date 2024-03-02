<?php 

    //session_start();
    //if(empty($_SESSION['admin_id']))
     //   header('Location:login.php');

?>


<!Doctype html>
<html>
    <head>
        <title>Matara Cricket Club - Admin Panel</title>
        <link rel="stylesheet" href="css/admin.css">
        <!--BoxIcon Link-->
        <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body>
        <div class="sidebar">
            <div class="logo-details">
                <i class='bx bx-baseball'></i>
                <span class="logo-name">MCC</span>
            </div>
            <ul class="nav-links" type="none">
                <li>
                    <a href="admin.php">
                    <i class='bx bx-grid-alt'></i>
                    <span class="link-name">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="showmember.php">
                    <i class='bx bx-user-circle'></i>
                    <span class="link-name">Member Details</span>
                    </a>
                </li>

                <li>
                    <a href="showbatch.php">
                    <i class='bx bx-group'></i>
                    <span class="link-name">Batch Details</span>
                    </a>
                </li>

                <li>
                    <a href="groundbooking.php">
                    <i class='bx bxs-book-content'></i>
                    <span class="link-name">Ground Booking</span>
                    </a>
                </li>

                <li>
                    <a href="admindetails.php">
                    <i class='bx bxs-id-card'></i>
                    <span class="link-name">Admin Details</span>
                    </a>
                </li>

                <li>
                    <a href="coach.php">
                    <i class='bx bx-male'></i>
                    <span class="link-name">Coach Details</span>
                    </a>
                </li>

                <li>
                    <a href="fee.php">
                    <i class='bx bxl-creative-commons'></i>
                    <span class="link-name">Amount Update</span>
                    </a>
                </li>

                <li>
                    <a href="membershippayment.php">
                    <i class='bx bx-money'></i>
                    <span class="link-name">Membership Payments</span>
                    </a>
                </li>

                <li>
                    <a href="annualpayment.php">
                    <i class='bx bxl-creative-commons'></i>
                    <span class="link-name">Annual Payments</span>
                    </a>
                </li>

                <li>
                    <a href="bookingpayment.php">
                    <i class='bx bx-money'></i>
                    <span class="link-name">Booking Payments</span>
                    </a>
                </li>

                <li>
                    <a href="logoutprocess.php">
                    <i class='bx bx-log-out'></i>
                    <span class="link-name">Logout</span>
                    </a>
                </li>
            </ul>
        </div>

        <!--Home Section-->
        <section class="home-section">
            <nav>
                <div class="sidebar-button">
                <i class='bx bx-menu sidebarbtn'></i>
                <span class="dashboard">Dashboard</span>
                </div>

                <div class="search-box">
                    <input type="text" placeholder="Search...">
                    <i class='bx bx-search-alt-2'></i>
                </div>

                <div class="profile-details">
                   <img src="img/16.jpg" alt="" >
                   <span class="admin_name">Matara Cricket Club</span>
                   <i class='bx bx-chevron-down'></i>
                </div>
            </nav>


            <!--Home Content-->

            <div class="title"><center><h1>Booking Approvals</h1></center></div>

            <form action="approval.php" method="post">
            <br><br>
            <div class="tbl">
                <center>
                <table>
                    <tr>
                        <th>Approval ID</th>
                        <th>Name</th>
                        <th>NIC</th>
                        <th>Email</th>
                        <th>Contact No</th>
                        <th>Purpose</th>
                        <th>Booking Date</th>
                        <th>End Date</th>
                        <th>No of Days</th>
                        <th>Amount</th>
                        <th>Approval</th>
                        <th>Delete</th>
                    </tr>

                    <?php
                    
                        $connection = mysqli_connect("localhost","root","","myproject");

                        $query = "SELECT * FROM approval";

                        $query_run = mysqli_query($connection,$query);

                        while($result=mysqli_fetch_array($query_run)){
                            ?>

                                <tr>
                                    <td><?php echo $result['approval_id'];?></td>
                                    <td><?php echo $result['name'];?></td>
                                    <td><?php echo $result['nic'];?></td>
                                    <td><?php echo $result['email'];?></td>
                                    <td><?php echo $result['contact_no'];?></td>
                                    <td><?php echo $result['purpose'];?></td>
                                    <td><?php echo $result['booking_date'];?></td>
                                    <td><?php echo $result['end_date'];?></td>
                                    <td><?php echo $result['no_of_days'];?></td>
                                    <td><?php echo $result['amount'];?></td>
                                    <td><a href="approval.php?id=<?php echo $result['approval_id'];?>">Approve</a></td>
                                    <td><a href="deleteapproval.php?id=<?php echo $result['approval_id'];?>">Delete</a></td>
                                    <!--<td><a href="approval.php?id=<?php echo $result['approval_id'];?>"><button type="submit" name="approve" value="approve">Approve</button></a></td>
                                    <td><a href="ball.html"><button type="submit" name="delete" value="delete">Delete</button></a></td>-->
                                    
                                </tr>

                            <?php
                        }
                    
                    ?>
                </table>
                    </center>
            </div>
            </form>

        </section>

            <script src="js/calc.js"></script>


    </body>
</html>