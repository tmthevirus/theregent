<?php

require_once "db_con.php";



//include_once "msg.php";

$MrMs = @$GET["cus_title"];
$f_name=@$_GET["f_name"];
$l_name=@$_GET["l_name"];
$nic=@$_GET["nic"];
$p_no=@$_GET["p_no"];
$email=@$_GET["email"];

$check_in_date=@$_GET["check_in_date"];
$check_out_date=@$_GET["check_out_date"];
$room_type=@$_GET["room_type"];
//$unique_b_code=;


$sql = "SELECT * FROM roombook WHERE chk_in = '$check_in_date' AND chk_out = '$check_out_date' AND roomType = $room_type";
$result = $conn->query($sql);

if ($result->num_rows > 0) {


    header('Location: ../success.php?msg=Booking not available!');




} else {

    $sql_1 = "INSERT INTO userbooking  (MrMs,f_name,l_name,nic_pass,mobile,email)
              VALUES ('$MrMs','$f_name','$l_name','$nic','$p_no','$email')";

    $sql_2 = "INSERT INTO roombook(chk_in,chk_out,roomType)
              VALUES ('$check_in_date','$check_out_date','$room_type')";

    if (($conn->query($sql_1)  === TRUE) && ($conn->query($sql_2)  === TRUE) )  {
        //  $msg = "New record created successfully";
        //header('../msg.php?msg=New record created successfully');
        header('Location: ../success.php?msg=Booking Success!');
    } else {
        echo "Error: " . $sql_1 . "<br>" . $conn->error;
    }

}





$conn->close();
?>