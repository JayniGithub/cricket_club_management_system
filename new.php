<?php

$connect = new PDO('mysql:host=localhost;dbname=myproject', 'root', '');

$data = array();

$query = "SELECT * FROM ground_booking ORDER BY booking_id";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

foreach($result as $row)
{
 $data[] = array(
  'id'   => $row["booking_id"],
  'title'   => $row["purpose"],
  'start'   => $row["booking_date"],
  'end'   => $row["end_date"]
  
 );
}

echo json_encode($data);

?>