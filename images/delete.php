<?php

include "../connect.php";

$imageid     = filterRequest("imageid");
$imagename  = filterRequest("imagename");

$stmt = $con->prepare("DELETE FROM `image` WHERE imag_id   = ? ");

$stmt->execute(array($imageid));

$count = $stmt->rowCount();

if ($count > 0) {
    deleteFile("../upload/hotels", $imagename);
    echo json_encode(array("status" => "success"));
} else {
    echo json_encode(array("status" => "fail"));
}
