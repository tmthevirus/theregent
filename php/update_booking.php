<?php

require_once "db_con.php";

session_start();

$nic=@$_POST["nic"];

//include_once "msg.php";

$MrMs = @$_POST["cus_title"];
$f_name=@$_POST["f_name"];
$l_name=@$_POST["l_name"];
$nic=@$_POST["nic"];
$p_no=@$_POST["p_no"];
$email=@$_POST["email"];

$check_in_date=@$_POST["check_in_date"];
$check_out_date=@$_POST["check_out_date"];
$room_type=@$_POST["room_type"];

//$unique_b_code=;

$sql1 = "SELECT cusId FROM userbooking WHERE nic_pass = $nic";
$result1 = $conn->query($sql1);

$sql2 = "SELECT cusId FROM roombook WHERE cus_nic = $nic";
$result2 = $conn->query($sql2);

if ($result1->num_rows > 0) {
    while($row = $result1->fetch_assoc()) {
         $cusID = $row["cusID"];

    }
}

if ($result2->num_rows > 0) {
    while($row = $result2->fetch_assoc()) {
        $room_cusID = $row["cusID"];

    }
}

$sql = "SELECT * FROM roombook WHERE chk_in = '$check_in_date' AND chk_out = '$check_out_date' AND roomType = $room_type";
$result = $conn->query($sql);

if ($result->num_rows > 0) {


    header('Location: ../success.php?msg=Booking not available!');






} else {

    $sql_1 = "UPDATE userbooking  
                SET MrMs = '$MrMs',
                f_name = '$f_name',
                l_name = '$l_name',
                nic_pass = '$nic',
                mobile = '$p_no',
                email = '$email'
                WHERE cusId = $cusID";

    $sql_2 = "UPDATE roombook
                SET chk_in = '$check_in_date',
                chk_out = '$check_out_date',
                roomType = '$room_type',
                cus_nic = '$nic'
                WHERE cusId = $room_cusID";


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


        header('Location: ../success.php?msg=Booking Updated! We have emailed you the unique customer code.');
    } else {
        echo "Error: " . $sql_1 . "<br>" . $conn->error;
    }

}





$conn->close();
?>