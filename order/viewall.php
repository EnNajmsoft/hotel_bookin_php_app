

<?php

include "../connect.php";

$hotelid   =   $_POST["hotelid"];

getAllData("ordersview", "hotel_id = $hotelid");


?>