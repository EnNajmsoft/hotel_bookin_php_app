<?php


include "../connect.php";

$userid = filterRequest("userid");

$stmt = $con->prepare("SELECT favorite.* , hotel_detales.* FROM favorite 
INNER JOIN  hotel_detales on  favorite.favorite_roomid = hotel_detales.room_id And favorite.favorite_userid = $userid  
");

$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
$count  = $stmt->rowCount();

if ($count > 0) {
    echo json_encode(array("status" => "success", "data" => $data));
} else {
    echo json_encode(array("status" => "failure"));
}



