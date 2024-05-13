
<?php
// admin
include '../connect.php';

$table     = "orders";

$orderid    =  filterRequest("orderid");

    $data = array(
    "order_statet"    => "2",
    );

updateData($table, $data, "order_id  = $orderid");
