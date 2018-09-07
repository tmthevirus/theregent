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
//$check_out_date=@$_GET["check_out_date"];
$hall_type=@$_GET["hall_type"];
//$unique_b_code=;


$sql = "SELECT * FROM hallbook WHERE chk_in = '$check_in_date' AND package = '$hall_type'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {


    header('Location: ../success.php?msg=Booking not available!');




} else {

    //header('Location: ../success.php?msg=Booking available!');

    $sql_1 = "INSERT INTO userbooking  (MrMs,f_name,l_name,nic_pass,mobile,email)
              VALUES ('$MrMs','$f_name','$l_name','$nic','$p_no','$email')";

    $sql_2 = "INSERT INTO hallbook(chk_in,package)
              VALUES ('$check_in_date','$hall_type')";

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