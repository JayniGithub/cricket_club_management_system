<?php 

    $connection = mysqliconnect("localhost","root","","myproject");

    $data = array();

    $query = "SELECT member_id,purpose,booking_date FROM ground_booking ORDER BY booking_id";

    $query_run = $connection->prepare($query);

    $query_run->execute();

    $result = $query_run->fetchAll();

    foreach($result as $row){
        $data[] = array(
            'id' = $row['member_id'];
            'event' = $row['purpose'];
            'date' = $row['booking_date'];
        );
    }

    echo json_encode($data);

?>