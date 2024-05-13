<?php

include "../connect.php";


$table = "rates";

$ratehotelid         =  filterRequest("ratehotelid");
$rateorderid         =  filterRequest("rateorderid");
$ratereating         =  filterRequest("ratereating");
$ratecomment         =  filterRequest("ratecomment");


$data = array(
    "rate_hotel_id"     => $ratehotelid,
    "rate_order_id"     => $rateorderid,
    "rate_reating"      => $ratereating,
    "rate_comment"      => $ratecomment,
);

insertData($table, $data);


$table2 = "hotels";
$avgrate = '';
$countrate = '';
$stmtavg = $con->prepare("SELECT AVG(rate_reating) FROM rates WHERE rate_hotel_id = $ratehotelid ");
$stmtavg->execute();
$avgrate = $stmtavg->fetch(PDO::FETCH_ASSOC);
$count = $stmtavg->rowCount();
if ($count > 0) {
    $stmt = $con->prepare("SELECT COUNT(rate_id ) FROM rates WHERE rate_hotel_id = $ratehotelid ");
    $stmt->execute();
    $countrate = $stmt->fetch(PDO::FETCH_ASSOC);
    $count = $stmt->rowCount();
    echo json_encode(array("status" => "success", "avgrate" => $avgrate, "count" => $countrate));
} else {
    echo json_encode(array("status" => "failure"));
}
$data2 = array(
    "hotel_riat"     => $avgrate["AVG(rate_reating)"],
    "hotel_views"    => $countrate["COUNT(rate_id )"],
);
updateData($table2, $data2, "hotel_id  = $ratehotelid");



