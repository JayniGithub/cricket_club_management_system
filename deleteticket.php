<?php

    $db = new mysqli("localhost","root","","mydb");
    $id = $_GET['Ticket_No'];
    mysqli_query($db, "DELETE FROM ticket WHERE Ticket_No ='$id'");

    header("location:ticket.php");
?>