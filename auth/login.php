<?php

include "../connect.php";


$email = filterRequest("email");
$password = $_POST['password'];

getData("users", "user_email = ? AND  user_passw = ? AND users_approve = 1", array($email, $password));
