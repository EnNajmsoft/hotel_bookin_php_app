<?php

include "../connect.php";

$hotelid     =  filterRequest("hotelid");

getAllData("image", "imag_hotelidi   =  $hotelid");


?>
