<?php

include "connect.php";

// insertData("hotels",)



$hotel_name       = filterRequest("hotel_name");
$hotel_adress     = filterRequest("hotel_adress");
$hotel_note      = filterRequest("hotel_note");

// $imagename = imageUpload("file");


    
    $stmt = $con->prepare("INSERT INTO `hotels`
    (`hotel_name`, `hotel_adress`,`hotel_note`)
  VALUES (? , ?  , ? )
  ");

    $stmt->execute(array($hotel_name , $hotel_adress , $hotel_note ));

    $count = $stmt->rowCount();

    if ($count > 0) {
        echo json_encode(array("status" => "success"));
    } else {
        echo json_encode(array("status" => "fail"));
    }

