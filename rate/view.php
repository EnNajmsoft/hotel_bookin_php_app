<?php

include "../connect.php";


$table = "rateview";

$ratehotelid         =  filterRequest("ratehotelid");


getAllData($table , "rate_hotel_id = $ratehotelid ");
