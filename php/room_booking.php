<?php

require_once "db_con.php";

$f_name=@$_GET["f_name"];
$l_name=@$_GET["l_name"];
$nic=@$_GET["nic"];
$p_no=@$_GET["p_no"];
$email=@$_GET["email"];

$check_in_date=@$_GET["check_in_date"];
$check_out_date=@$_GET["check_out_date"];
$room_type=@$_GET["room_type"];
//$unique_b_code=;



$sql_1 = "INSERT INTO customer  (f_name,l_name,nic,p_no,email)
VALUES ('$f_name','$l_name','$nic','$p_no','$email')";

$sql_2 = "INSERT INTO $room_type(cus_nic,check_in_date,check_out_date)
VALUES ('$nic','$check_in_date','$check_out_date')";

if (($conn->query($sql_1)  === TRUE) && ($conn->query($sql_2)  === TRUE) )  {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql_1 . "<br>" . $conn->error;
}

$conn->close();
?>