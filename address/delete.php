<?php 

include "../connect.php" ; 

$addressid = filterRequest("addressid"); 

deleteData("adsress" , "address_id  = $addressid");
