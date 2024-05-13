<?php

include "../connect.php";



$table = "rooms";



$hotelid      =  filterRequest("hotelid");
$roomname     =  filterRequest("roomname");
$roomnamear   =  filterRequest("roomnamear");
$roomprice    =  filterRequest("roomprice");
$roomdescont  =  filterRequest("roomdescont");
$roomnote     =  filterRequest("roomnote");


$imagename = imageUpload( "../upload/rooms" , "file") ;

$data = array(
    "room_hotel_id"  => $hotelid,
    "room_namear"    => $roomnamear,
    "room_name"      => $roomname,
    "room_price"     => $roomprice,
    "room_descont"   => $roomdescont,
    "room_note"      => $roomnote,
    "room_main_imag" => $imagename,
    
);

insertData($table , $data);

?>
