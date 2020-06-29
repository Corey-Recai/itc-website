<?php // ----------------------------------------- // The Web Help .com
// ----------------------------------------- // remember to replace your@email.com with your own email address lower in this code.
// load smtp variables
//$smtp = Mail::factory('smtp', array(
// 'host' => 'ssl://smtp.gmail.com',
// 'port' => '465',
// 'auth' => true,
// 'username' => 'sohosolutionsinc',
// 'password' => 'usps^5low$'
//));
// load the swift library to send emails because Azure doesn't allow PHP to send emails
require_once '/swift/lib/swift_required.php';
$transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
    ->setUsername('sohosolutionsinc')
    ->setPassword('usps^5low$');
$mailer = Swift_Mailer::newInstance($transport);
// load the variables form address bar
$name = $_REQUEST['first_name']." ".$_REQUEST['last_name'];
$subject = $_REQUEST['subject'];
$message = $_REQUEST['message'];
$from = $_REQUEST['email'];
$verif_box = $_REQUEST['verif_box'];
// remove the backslashes that normally appears when entering " or '
$name = stripslashes($name);
$message = stripslashes($message);
$subject = stripslashes($subject);
$from = stripslashes($from); // check to see if verificaton code was correct
if (md5($verif_box) . 'a4xn' == $_COOKIE['tntcon']) {
    // if verification code was correct send the message and show this page
    $message_send = Swift_Message::newInstance($subject)
        ->setFrom([$from => $name])
        ->setTo(['crecai@itcservices.com'])
        ->setBody($message);
    // delete the cookie so it cannot sent again by refreshing this page
    setcookie('tntcon', '');
} else {
    // if verification code was incorrect then return to contact page and show error
    header(
        'Location:' .
            $_SERVER['HTTP_REFERER'] .
            "?subject=$subject&from=$from&message=$message&wrong_code=true"
    );
    exit();
}
$result = $mailer->send($message_send);
?>
