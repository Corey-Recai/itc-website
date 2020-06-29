<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
    $message = "error; you need to submit the form!";
    echo "<script type='text/javascript'>alert('$message');</script>";
    header('Location: contact.html');
    
}
$name = $_POST['first_name'] . $_POST['last_name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

//Validate first
if(empty($name)||empty($visitor_email)) 
{
    $message = "Name and email are mandatory!";
    echo "<script type='text/javascript'>alert('$message');</script>";
    header('Location: contact.html');
    exit;
}

if(IsInjected($visitor_email))
{
    $message = "Bad email value!";
    echo "<script type='text/javascript'>alert('$message');</script>";
    header('Location: contact.html');
    exit;
}

$email_from = 'crecai@itcservices.com';//<== update the email address
$email_subject = "New Message from itcservices.com";
$email_body = 
    
    "Name: $name.\n".
    "Email: $visitor_email.\n".
    "Subject: $subject.\n".
    "Message: $message.\n".
    
$to = "crecai@itcservices.com";//<== update the email address
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
//Send the email!
mail($to,$email_subject,$email_body);
//done. redirect to thank-you page.
header('Location: ../index.html#contact');


// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
   
?> 