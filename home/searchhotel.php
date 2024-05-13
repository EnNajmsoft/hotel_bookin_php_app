

<?php

include "../connect.php";
$searchtext = $_POST['search'];



getAllData("hotels", "  hotel_name_en LIKE '%$searchtext%' OR hotel_name_ar LIKE '%$searchtext%'    " );


?>

