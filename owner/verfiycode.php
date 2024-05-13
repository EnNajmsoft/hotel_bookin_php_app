<?php 

include "../connect.php" ;

$email  = filterRequest("email") ; 

$verfiy = filterRequest("verifycode") ; 

$stmt = $con->prepare("SELECT * FROM owners WHERE owner_email = '$email' AND owner_verficycode = '$verfiy' ") ; 
 
$stmt->execute() ; 

$count = $stmt->rowCount() ; 

if ($count > 0) {
 
    $data = array("owner_verficycode" => "1") ; 

    updateData("owners" , $data , "owner_email = '$email'");

}else {
    
 printFailure("verifycode not Correct") ; 

}
