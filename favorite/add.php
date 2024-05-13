<?php

include "../connect.php";



$table = "favorite";


$userid      =  filterRequest("userid");
$roomid      =  filterRequest("roomid");


$data = array(
    "favorite_roomid"  =>   $roomid,
    "favorite_userid"  =>   $userid,
);

insertData("favorite" , $data );

?>