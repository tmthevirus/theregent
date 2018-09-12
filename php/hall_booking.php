<?php

require_once "db_con.php";



//include_once "msg.php";

$MrMs = @$_POST["cus_title"];
$f_name=@$_POST["f_name"];
$l_name=@$_POST["l_name"];
$nic=@$_POST["nic"];
$p_no=@$_POST["p_no"];
$email=@$_POST["email"];

$check_in_date=@$_POST["check_in_date"];
//$check_out_date=@$_GET["check_out_date"];
$hall_type=@$_POST["hall_type"];

$code=substr(md5(mt_rand()),0,15);

//$unique_b_code=;


$sql = "SELECT * FROM hallbook WHERE chk_in = '$check_in_date' AND package = '$hall_type'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {


    header('Location: ../success.php?msg=Booking not available!');




} else {

    //header('Location: ../success.php?msg=Booking available!');

    $sql_1 = "INSERT INTO userbooking  (MrMs,f_name,l_name,nic_pass,mobile,email,unique_code)
              VALUES ('$MrMs','$f_name','$l_name','$nic','$p_no','$email','$code')";

    $sql_2 = "INSERT INTO hallbook(chk_in,package,cus_nic)
              VALUES ('$check_in_date','$hall_type','$nic')";

    if (($conn->query($sql_1)  === TRUE) && ($conn->query($sql_2)  === TRUE) )  {
        //  $msg = "New record created successfully";
        //header('../msg.php?msg=New record created successfully');




        $message = "Your unique Code is ".$code."";
        $to=$email;
        $subject="Unique Code";
        $from = 'your email';
        $body="Your unique customer  Code is '.$code.' Please use this code or your NIC number for further actions.";
        $headers = "From:".$from;
        mail($to,$subject,$body,$headers);




        header('Location: ../success.php?msg=Booking Success! We have emailed you the unique customer code.');
    } else {
        echo "Error: " . $sql_1 . "<br>" . $conn->error;
    }

}





$conn->close();
?>