<?php

include "../connect.php";


$email    = filterRequest("email");
$password = sha1($_POST['password']);

getData("owners", "owner_email = ? AND  owner_passw = ? AND owner_approve = 1", array($email, $password));
