<?php

include "../connect.php";
$tabel = "users";

$username     = filterRequest("username");
$userlastname = filterRequest("userlastname");
$email        = filterRequest("email");
$phone        = filterRequest("phone");
$password     = sha1($_POST['password']);
$dateofbirth  = filterRequest("dateofbirth");
$gander       = filterRequest("gander");
$verfiycode   = 5555;
// $verfiycode     = rand(10000 , 99999);

$stmt = $con->prepare("SELECT * FROM users WHERE user_email = ? OR user_phone = ? ");
$stmt->execute(array($email, $phone));
$count = $stmt->rowCount();
if ($count > 0) {
    printFailure("PHONE OR EMAIL");
   } else {

    $data = array(
        "user_name"      => $username,
        "user_last_name" => $userlastname,
        "user_email"     => $email,
        "user_phone"     => $phone,
        "user_passw"     =>  $password,
        "user_brithday"  => $dateofbirth,
        "user_gender"    => $gander,
        "user_verficycode" => $verfiycode,
    );
    // sendEmail($email, "Verfiy Code hotelapp", "Verfiy Code $verfiycode"); 

    insertData($tabel, $data);

}


?>


