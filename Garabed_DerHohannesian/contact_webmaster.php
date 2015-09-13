<?php
    if (isset($_POST["submit"])) {
        $name1 = $_POST['name1'];
        $email1 = $_POST['email1'];
        $message1 = $_POST['message1'];
        $human1 = intval($_POST['human1']);
        $from = 'Contact Form'; 
        $to = 'webmaster@garabedderhohannesian.com'; 
        $subject = 'GarabedDerHohannesian.com Contact Request ';
        
        $body = "From: $name1\n E-Mail: $email1\n Message:\n $message1";
 
        // Check if name has been entered
        if (!$_POST['name1']) {
            $errName1 = 'Please enter your name';
        }
        
        // Check if email has been entered and is valid
        if (!$_POST['email1'] || !filter_var($_POST['email1'], FILTER_VALIDATE_EMAIL)) {
            $errEmail1 = 'Please enter a valid email address';
        }
        
        //Check if message has been entered
        if (!$_POST['message1']) {
            $errMessage1 = 'Please enter your message';
        }
        //Check if simple anti-bot test is correct
        if ($human1 !== 11) {
            $errHuman1 = 'Your anti-spam answer is incorrect';
        }
 
// If there are no errors, send the email
if (!$errName1 && !$errEmail1 && !$errMessage1 && !$errHuman1) {
    if (mail ($to, $subject, $body, $from)) {
        $result1='<div class="alert alert-success">Thank You! We will respond shortly</div>';
    } else {
        $result1='<div class="alert alert-danger">We are sorry there was an error sending your message. Please try again</div>';
    }
}
    }
?>