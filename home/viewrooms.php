

<?php

include "../connect.php";



$userid = filterRequest("userid");



$stmt = $con->prepare("SELECT hotel_detales.* , 1 as favorite FROM hotel_detales 
INNER JOIN favorite ON favorite.favorite_roomid = hotel_detales.room_id AND favorite.favorite_userid = $userid
UNION ALL 
SELECT *  , 0 as favorite  FROM hotel_detales
WHERE   room_id NOT IN  ( SELECT hotel_detales.room_id FROM hotel_detales 
INNER JOIN favorite ON favorite.favorite_roomid = hotel_detales.room_id AND favorite.favorite_userid =  $userid  )");

$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
$count  = $stmt->rowCount();

if ($count > 0) {
    echo json_encode(array("status" => "success", "data" => $data));
} else {
    echo json_encode(array("status" => "failure"));
}






?>