<?php 

include '../connect.php';

$table = "adsress";

$hotelid    = filterRequest("hotelid");
$city       = filterRequest("city");
$street     = filterRequest("street");
$lat        = filterRequest("lat");
$long       = filterRequest("long");
$note       = filterRequest("note");


$data = array(
    "address_hotel_id"     => $hotelid,
    "address_city"         => $city,
    "address_street"       => $street,
    "address_lat"          => $lat,
    "address_long"         => $long,
    "address_note"         => $note,

);


$stmt = $con->prepare("SELECT * FROM adsress WHERE address_hotel_id  = ? ");
$stmt->execute(array($hotelid));
$count = $stmt->rowCount();
if ($count > 0) {

    updateData($table, $data, "address_hotel_id = $hotelid");

} else {

    insertData($tabel, $data);
}


