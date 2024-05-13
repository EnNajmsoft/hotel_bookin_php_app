<?php 

include '../connect.php';

$table = "adsress";

$addressid    = filterRequest("addressid"); 
$city         = filterRequest("city");
$street       = filterRequest("street");
$lat          = filterRequest("lat");
$long         = filterRequest("long");
$note         = filterRequest("note");


$data = array(  
"address_city" => $city, 
"address_street" => $street,
"address_lat" => $lat,
"address_long" => $long,
"address_note"   => $note
);

updateData($table , $data , "address_id = $addressid");