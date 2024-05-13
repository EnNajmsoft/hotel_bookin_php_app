<?php


include "../connect.php";

$ownername     = filterRequest("ownername");
$ownerlastname = filterRequest("ownerlastname");
$email         = filterRequest("email");
$phone         = filterRequest("phone");
$password      = sha1($_POST['password']);

$verfiycode     = 5555;
// $verfiycode     = rand(10000 , 99999);

$stmt = $con->prepare("SELECT * FROM owners WHERE owner_email = ? OR owner_phone = ? ");
$stmt->execute(array($email, $phone));
$count = $stmt->rowCount();
if ($count > 0) {
    printFailure("PHONE OR EMAIL");
   } else {

    $data = array(
        "owner_name"         => $ownername,
        "owner_last_name"    => $ownerlastname,
        "owner_email"        => $email,
        "owner_phone"        => $phone,
        "owner_passw"        => $password,
        "owner_verficycode"  => $verfiycode,
    );
    // sendEmail($email, "Verfiy Code Ecommerce", "Verfiy Code $verfiycode"); 

    insertData("owners", $data);

}
