
<?php
// admin
include '../connect.php';

$table = "image";

$imageid     =  filterRequest("imageid");
$imageold    =  filterRequest("imageold");

$imagename = imageUpload("../upload/hotels", "file");

if ($imagename == "empty") {
    $data = array();
} else {
    deleteFile("../upload/hotels", $imageold);
    $data = array(
        "hotel_imag_main" => $imagename,
    );
}

updateData($table, $data, "imag_id  = $imageid");
