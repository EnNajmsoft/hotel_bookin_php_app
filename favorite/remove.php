<?php 

include "../connect.php" ;

$userid = filterRequest("userid") ;
$roomid = filterRequest("roomid") ; 

deleteData("favorite" , "favorite_userid = $userid AND favorite_roomid = $roomid") ; 
