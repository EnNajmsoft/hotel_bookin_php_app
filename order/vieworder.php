

<?php

include "../connect.php";

$userid   =   $_POST["userid"];

getAllData("ordersview", "order_user_id = $userid" );


?>