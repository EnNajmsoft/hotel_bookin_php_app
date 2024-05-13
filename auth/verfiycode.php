<?php 

include "../connect.php" ;

$email  = filterRequest("email") ; 

$verfiy = filterRequest("verifycode") ; 

$stmt = $con->prepare("SELECT * FROM users WHERE user_email = '$email' AND user_verficycode = '$verfiy' ") ; 
 
$stmt->execute() ; 

$count = $stmt->rowCount() ; 

if ($count > 0) {
 
    $data = array("users_approve" => "1") ; 

    updateData("users" , $data , "user_email = '$email'");

}else {
    
 printFailure("verifycode not Correct") ; 

}
?>