<?php

require "db_con.php";

$check_in_date = $_GET[''];
$check_out_date = $_GET[''];



    $sql = "SELECT * FROM roombook WHERE chk_in = '$check_in_date' AND chk_out = '$check_out_date'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "yes";


    } else {
        echo "no";
    }








/*room_price("'Honeymoon'");*/





?>