<?php

include "../connect.php";

$email = filterRequest("email");

// $verfiycode     = rand(10000 , 99999);
$verfiycode  = 4646;

$data = array(
    "owner_verficycode" => $verfiycode
);

updateData("owners",  $data, "owner_email = '$email'"); 

// sendEmail($email , "Verfiy Code Ecommerce" , "Verfiy Code $verfiycode") ; 
