<?php

include("db_con.php");
session_start();


$email=@$_POST["email"];
$nic=@$_POST["nic"];

$_SESSION['login_user']=$nic;

$sql = "SELECT * FROM userbooking WHERE email = '$email' and nic_pass = '$nic'";
$result = $conn->query($sql);

        if ($result->num_rows != 0)
        {
        echo "<script language='javascript' type='text/javascript'> location.href='../edit_booking.php' </script>";
        }
        else
        {
        echo "<script type='text/javascript'>alert('Email Or NIC Invalid!')</script>";
        }


?>