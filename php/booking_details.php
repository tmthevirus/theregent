<?php

require "db_con.php";

session_start();

$curent_user =$_SESSION['login_user'];


function  get_booking_details($item_name){

    global $curent_user;
    global $conn ;



    $sql = "SELECT $item_name FROM userbooking WHERE nic_pass = $curent_user";
    $result = $conn->query($sql);



    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo $row[$item_name];

        }
    } else {
        echo "0 results";
    }





}


function  get_room_details($item_name){

    global $curent_user;
    global $conn ;



    $sql = "SELECT $item_name FROM roombook WHERE cus_nic = $curent_user";
    $result = $conn->query($sql);



    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo $row[$item_name];

        }
    } else {
        echo "0 results";
    }
}

function cancel_booking() {
    global $curent_user;
    global $conn;

    $sql1 = "DELETE FROM userbooking WHERE nic_pass = $curent_user";
    $sql2 = "DELETE FROM roombook WHERE cus_nic = $curent_user";

    if ($conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE ) {
        header('Location: ../success.php?msg=Booking Deleted!');
    } else {
        echo "Error deleting record: " . $conn->error;
    }

}


?>