<?php

include "../connect.php";

$table = "hotels";

$ratehotelid         =  filterRequest("ratehotelid");

$avgrate;
$countrate;

$stmt = $con->prepare("SELECT AVG(rate_reating) FROM rates WHERE rate_hotel_id = $ratehotelid ");

$stmt->execute();
$avgrate = $stmt->fetch(PDO::FETCH_ASSOC);
$count = $stmt->rowCount();
if ($count > 0) {
$stmt = $con->prepare("SELECT COUNT(rate_reating) FROM rates WHERE rate_hotel_id = $ratehotelid ");
$stmt->execute();
$countrate = $stmt->fetch(PDO::FETCH_ASSOC);
echo json_encode(array("status" =>"success", "avgrate" =>$avgrate, "count" => $countrate));

} else {
echo json_encode(array("status" => "failure"));
}
$data = array(
    "hotel_riat"    => $avgrate,
    "hotel_views"    => $countrate,
);
updateData($table, $data, "hotel_id  = $hotelid");