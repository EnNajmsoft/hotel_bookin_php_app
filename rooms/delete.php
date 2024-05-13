<?php

include "../connect.php";

$roomid    = filterRequest("roomid");
$imagename  = filterRequest("imagename");

$stmt = $con->prepare("DELETE FROM `rooms` WHERE room_id   = ? ");

$stmt->execute(array($roomid));

$count = $stmt->rowCount();

if ($count > 0) {
    deleteFile("../upload/rooms", $imagename);
    echo json_encode(array("status" => "success"));
} else {
    echo json_encode(array("status" => "fail"));
}



