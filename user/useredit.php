<?php

include "../connect.php";


$table = "users";

$userid       =  filterRequest("userid");
$username     =  filterRequest("username");
$userlastname =  filterRequest("userlastname");
$useremail    =  filterRequest("useremail");
$userphone    =  filterRequest("userphone");
$userbrithday =  filterRequest("userbrithday");
$usergender   =  filterRequest("usergender");
$imageold     =  filterRequest("userimage");
        


$imagename =  imageUpload("../upload/users", "file");

if ($imagename == "empty") {
    $data = array(
        "user_name"        => $username,
        "user_last_name"   => $userlastname,
        "user_email"       => $useremail,
        "user_phone"       => $userphone,
        "user_brithday"    => $userbrithday,
        "user_gender"      => $usergender,

        

        );
} else {
   deleteFile("../upload/users"  , $imageold) ; 
   $data = array(
        "user_name"        => $username,
        "user_last_name"   => $userlastname,
        "user_email"       => $useremail,
        "user_phone"       => $userphone,
        "user_brithday"    => $userbrithday,
        "user_gender"      => $usergender,
        "user_imag"        => $imagename,


    );
}



updateData($table, $data, "user_id  = $userid");
