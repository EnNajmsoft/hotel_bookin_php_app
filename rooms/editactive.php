
<?php
// admin
include '../connect.php';

$table = "rooms";

$roomid      =  filterRequest("roomid");
$roomactive  =  filterRequest("roomactive");

$data = array("room_active"  => $roomactive );

updateData($table, $data, "room_id  = $roomid");
