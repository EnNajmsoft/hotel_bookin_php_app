<?php 

include "../connect.php"  ;

$email = filterRequest("email");

// $verfiycode     = rand(10000 , 99999);
$verfiycode  =4646;

$data = array(
"users_verfiycode" => $verfiycode
) ; 

updateData("users" ,  $data  , "user_email = '$email'" ) ; 

// sendEmail($email , "Verfiy Code Ecommerce" , "Verfiy Code $verfiycode") ; 

 