<?php

require "db_con.php";



function  room_price($room_type){

    global $conn ;

    $sql = "SELECT priceForNight FROM rooms WHERE roomType = $room_type";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo $row["priceForNight"];

        }
    } else {
        echo "0 results";
    }





}

function  hall_price($hall_type){

    global $conn ;

    $sql = "SELECT price FROM halls WHERE hallType = $hall_type";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo $row["price"];

        }
    } else {
        echo "0 results";
    }





}


/*room_price("'Honeymoon'");*/





?>