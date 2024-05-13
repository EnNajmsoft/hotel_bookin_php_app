<?php

include "../connect.php";

// $userid = 1;


$msgError = array()  ;

$table = "hotels";


$hotelownerid       =  filterRequest("hotelownerid");
$hotelnamear        =  filterRequest("hotelnamear");
$hotelnameen        =  filterRequest("hotelnameen");
$hoteldescribar     =  filterRequest("hoteldescribar");
$hoteldescriben     =  filterRequest("hoteldescriben");
// $hoteladdreessid    =  filterRequest("hoteladdreessid");
// $hotelcity          =  filterRequest("hotelcity");


$imagename = imageUpload( "../upload/hotels" , "file") ;

$data = array(
"hotel_owner_id"   => $hotelownerid,
"hotel_name_ar"    => $hotelnamear,
"hotel_name_en"    => $hotelnameen,
"hotel_describ_ar" => $hoteldescribar, 
"hotel_describ_en" => $hoteldescriben,
"hotel_imag_main" => $imagename,
);

insertData($table , $data);

?>
