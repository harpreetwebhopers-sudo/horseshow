<?php
// Disable warnings/notices
error_reporting(0);

if($_SERVER['REQUEST_METHOD'] == "POST") {

    $to = "phbhshow@gmail.com, harpreet.webhopers@gmail.com"; 
    $subject = "New Callback Request - Lead Received";

    $message = "
    <h2>New Lead Received</h2>
    <p><b>Owner Name:</b> ".htmlspecialchars($_POST['fullname'])."</p>
    <p><b>Mobile Number:</b> ".htmlspecialchars($_POST['phone'])."</p>
    <p><b>Email:</b> ".htmlspecialchars($_POST['email'])."</p>
    <p><b>City:</b> ".htmlspecialchars($_POST['city'])."</p>
    <p><b>State:</b> ".htmlspecialchars($_POST['state'])."</p>
    <p><b>Horse Name:</b> ".htmlspecialchars($_POST['horsename'])."</p>
    <p><b>Horse Age:</b> ".htmlspecialchars($_POST['horseage'])."</p>
    <p><b>Horse Gender:</b> ".htmlspecialchars($_POST['horsegender'])."</p>
    <p><b>Horse Photograph:</b> ".htmlspecialchars($_POST['horse_photo'])."</p>
    <p><b>Horse Lineage:</b> ".htmlspecialchars($_POST['horse_lineage'])."</p>
    ";

    $headers  = "From: Patiala Horse Show <no-reply@patialahorseshow.com>\r\n";
    $headers .= "Reply-To: ".htmlspecialchars($_POST['email'])."\r\n";
    $headers .= "Return-Path: no-reply@patialahorseshow.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    if(mail($to, $subject, $message, $headers)) {
        echo "success";
    } else {
        echo "fail";
    }
}
?>