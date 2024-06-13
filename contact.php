<?php
if(isset($_POST['submit'])) {
$statusMsg='';

    $email = $_POST['email'];
    $name = $_POST['name'];
	 $phone = $_POST['phone'];
    $subject = "Enquiry From DDB Group Website";
    $message = $_POST['message'];
	//$sub = $_POST['sub'];
  
$fromemail =  "DDB Group";

$email_message = 'This mail is being send from DDB Group Website 
                    Name: '.$name.'
                    Email: '.$email.'
                    Phone : '.$phone.'					
                    Message: '.$message.'';


$semi_rand = md5(uniqid(time()));

 $header = "From:".$fromemail." \r\n"; 
 $header .= "Reply-To:info.ddbgroup@gmail.com\r\n";
 $header .= "MIME-Version: 1.0\r\n";
 $header .= "Content-type: text/html\r\n";      
 
 $toemail="info.ddbgroup@gmail.com"; 
 //   $retval = mail ($to,$subject,$message,$header,'-fsandip@shivadnyafabrication.in');
if(mail($toemail, $subject, $email_message, $header,'-finfo@ddbgroup.in')){
   
    echo '<script language="javascript">';
    echo 'window.alert("Thank You!");';
	 echo 'location.href="contact.html";';
    echo '</script>';
	}
	else
	{
	echo '<script language="javascript">';
    echo 'window.alert("Mail not send");';
	 echo 'location.href="contact.html";';
    echo '</script>';
	}
}
   ?>