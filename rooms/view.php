<?php

include "../connect.php";

$hotelid     =  filterRequest("hotelid");
getAllData("rooms", "room_hotel_id  =  $hotelid");

?>