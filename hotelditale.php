<?php

include "connect.php";


// $hotelid = filterRequest("hotelid");

// getAllData("itemsview", "categories_id = $categoryid");

$userid = filterRequest("userid");
$hotelid = filterRequest("hotelid");



$stmt = $con->prepare("SELECT hotel_detales.* , 1 as favorite FROM hotel_detales 
INNER JOIN favorite ON favorite.favorite_roomid = hotel_detales.room_id AND favorite.favorite_userid = $userid
WHERE hotel_id = $hotelid
UNION ALL 
SELECT *  , 0 as favorite  FROM hotel_detales
WHERE  hotel_id = $hotelid AND room_id NOT IN  ( SELECT hotel_detales.room_id FROM hotel_detales 
INNER JOIN favorite ON favorite.favorite_roomid = hotel_detales.room_id AND favorite.favorite_userid =  $userid  )");

$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
$count  = $stmt->rowCount();

if ($count > 0) {
    echo json_encode(array("status" => "success", "data" => $data));
} else {
    echo json_encode(array("status" => "failure"));
}


// include "connect.php";

// $hotelid = $_POST['id'];


// $alldata = array();

// $alldata['status'] = "success";

// $hotel = getAllData("hotels", "hotel_id  =  $hotelid", null, false);

// $alldata['hotel'] = $hotel;

// $rooms = getAllData("rooms", "room_hotel_id  =  $hotelid", null, false);

// $alldata['rooms'] = $rooms;


// echo json_encode($alldata);
