<?php
	$name=$_REQUEST['inputName'];
    $email=$_REQUEST['inputEmail'];
    $message=$_REQUEST['textArea'];
    if (($name=="")||($email=="")||($message==""))
		{
			echo "All fields are required, please fill out the form again.";
        }
        
		else {
			$from="From: $name
            \r\nReturn-path: $email";
            $subject="Message sent using your contact form";
            mail("webmaster@garabedderhohannesian.com", $subject, $message, $from);
            echo "Email sent!";
		}
?>