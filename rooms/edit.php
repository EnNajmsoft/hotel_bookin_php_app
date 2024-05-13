
<?php
// admin
include '../connect.php';

$table = "rooms";

$roomid      =  filterRequest("roomid");
$roomname    =  filterRequest("roomname");
$roomnamear  =  filterRequest("roomnamear");
$roomprice   =  filterRequest("roomprice");
$roomdescont =  filterRequest("roomdescont");
$roomnote    =  filterRequest("roomnote");
$imageold    =  filterRequest("roomimage");
        


$imagename = imageUpload("../upload/rooms", "file");

if ($imagename == "empty") {
    $data = array(
        "room_namear"    => $roomnamear,
        "room_name"      => $roomname,
        "room_price"     => $roomprice,
        "room_descont"   => $roomdescont,
        "room_note"      => $roomnote,
     
        

        );
} else {
   deleteFile("../upload/rooms"  , $imageold) ; 
   $data = array(
        "room_namear"    => $roomnamear,
        "room_name"      => $roomname,
        "room_price"     => $roomprice,
        "room_descont"   => $roomdescont,
        "room_note"      => $roomnote,
        "room_main_imag" => $imagename,

    );
}



updateData($table, $data, "room_id  = $roomid");



