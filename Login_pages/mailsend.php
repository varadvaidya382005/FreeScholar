<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$mail = new PHPMailer(true);
require('06_Connection_for_Institute_Verification.php');
require('connection.php');

$un = $_GET['user_name'];
echo $un;

// It's highly recommended to sanitize user input before directly using it in SQL queries
// For simplicity, I'm assuming $un contains a safe value, but in a real scenario, you should validate and sanitize it properly

$query_from_status = "SELECT * FROM `status` WHERE user_name='$un' AND home_status='Accepted'";
$res_from_status = mysqli_query($conn, $query_from_status);

if ($res_from_status) {
    // Fetch the result as an associative array
    $val_from_status = mysqli_fetch_array($res_from_status, MYSQLI_ASSOC);

    // Output the result
    echo "<pre>";
    $email_receiver = $val_from_status['user_name']; // Assign the value directly
    echo "</pre>";
    echo $email_receiver;
} else {
    // Handle query execution error
    echo "Error executing the query: " . mysqli_error($conn);
}

// Close the connection
// mysqli_close($conn);











$query1= "SELECT * FROM `user_info` WHERE `user_name` LIKE '$email_receiver'";
$res1=mysqli_query($conn,$query1);
$val1=mysqli_fetch_array($res1);

$email=$val1['email'];




// if(isset($_POST['btn']))  
// {
try {
   
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
    $mail->isSMTP();                                            
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;                                 
    $mail->Username   = 'samadhanbodkhe222@gmail.com';        
    $mail->Password   = 'ybgl ydqt kjti emhj';                
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;          
    $mail->Port       = 465;                                  

    
    $mail->setFrom('samadhanbodkhe222@gmail.com');
    $mail->addAddress($email);     
   

    // //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name


    $mail->isHTML(true);                                 
    $mail->Subject = '<b>GOVT Scholarship Form</b> ';
    $mail->Body    = 'Your Form has been Submitted ';


    $mail->send();
    echo "<script>alert('Your scheme has been applied ')";
    echo "window.open(01_home_page.html)</script>";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
// }

?>