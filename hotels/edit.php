
<?php

include '../connect.php';

$table = "hotels";

$hotelid            =  filterRequest("hotelid");
$hotelnamear        =  filterRequest("hotelnamear");
$hotelnameen        =  filterRequest("hotelnameen");
$hoteldescribar     =  filterRequest("hoteldescribar");
$hoteldescriben     =  filterRequest("hoteldescriben");
$imageold           =  filterRequest("hotelimage");
        


$imagename = imageUpload("../upload/hotels", "file");

if ($imagename == "empty") {
    $data = array(
        "hotel_name_ar"    => $hotelnamear,
        "hotel_name_en"    => $hotelnameen,
        "hotel_describ_ar" => $hoteldescribar,
        "hotel_describ_en" => $hoteldescriben,
        

        );
} else {
   deleteFile("../upload/hotels"  , $imageold) ; 
   $data = array(
        "hotel_name_ar"    => $hotelnamear,
        "hotel_name_en"    => $hotelnameen,
        "hotel_describ_ar" => $hoteldescribar,
        "hotel_describ_en" => $hoteldescriben,
        "hotel_imag_main"  => $imagename,

    );
}



updateData($table, $data, "hotel_id  = $hotelid");
