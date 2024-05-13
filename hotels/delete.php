<?php

include "../connect.php";

$hotelid     = filterRequest("id");
$imagename  = filterRequest("imagename");

$stmt = $con->prepare("DELETE FROM `hotels` WHERE hotel_id  = ? ");

$stmt->execute(array($hotelid));

$count = $stmt->rowCount();

if ($count > 0) {
    deleteFile("../upload/hotels", $imagename);
    echo json_encode(array("status" => "success"));
} else {
    echo json_encode(array("status" => "fail"));
}
