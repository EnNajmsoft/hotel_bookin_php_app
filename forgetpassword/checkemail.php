<?php
include "../connect.php";
$email = filterRequest("email");
$verfiycode   =1234;
// $verfiycode     = rand(10000, 99999);
$stmt = $con->prepare("SELECT * FROM users WHERE user_email = ? ");
$stmt->execute(array($email));
$count = $stmt->rowCount();
result($count);

if ($count > 0) {
    $data = array("user_verficycode" => $verfiycode);
    updateData("users", $data, "user_email = '$email'", false);

    // sendEmail($email, "Verfiy Code Ecommerce", "Verfiy Code $verfiycode");
}
