
<?php
// admin
include '../connect.php';

$table = "hotels";

$hotelid       =  filterRequest("hotelid");
$hotel_active  =  filterRequest("hotelactive");

$data = array("hotel_active"  => $hotel_active );

updateData($table, $data, "hotel_id  = $hotelid");
