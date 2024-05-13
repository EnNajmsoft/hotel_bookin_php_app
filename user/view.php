

<?php

include "../connect.php";

$userid   =   $_POST["userid"];

getData("users", "user_id = ? ", array($userid));

?>