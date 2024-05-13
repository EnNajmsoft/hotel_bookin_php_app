<?php

include "../connect.php";

$msgError = array()  ;

$table = "image";
$hotelid      =  filterRequest("hotelid");
$imagename = imageUpload( "../upload/hotels" , "file") ;

$data = array(
"imag_hotelidi"     => $hotelid,
 "image_name"       => $imagename,
);

insertData($table , $data);
