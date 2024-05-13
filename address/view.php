<?php 

include "../connect.php" ;

$hotelid = filterRequest("hotelid") ; 

getAllData("adsress" , "address_hotel_id = $hotelid ") ; 