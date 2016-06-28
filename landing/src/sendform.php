<?php
require 'PHPMailerAutoload.php';
//require 'class.phpmailer.php';
//session_start();
//if( isset($_POST['email']) )
{
    define('LOGIN', 'growowpostman1');
    define('PASSWORD', 'UhjdjdGjcnvfy');
    define('SENDER', 'growowpostman@gmail.com');
    define('RECEPIENT', 'newuser@growow.org');

    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPDebug  = 0;
    $mail->SMTPAuth   = true;                  // enable SMTP authentication
    $mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
    $mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
    $mail->Port       = 465;                   // set the SMTP port for the GMAIL server
    $mail->Username   = LOGIN;  // GMAIL username
    $mail->Password   = PASSWORD;            // GMAIL password

    $mail->From = SENDER;
    $mail->FromName = "Mailer";
    $mail->AddAddress(RECEPIENT);
    $mail->AddAddress('rettpop@gmail.com');
    $mail->AddReplyTo(RECEPIENT, "Information");

    $mail->WordWrap = 50;                                 // set word wrap to 50 characters
    $mail->IsHTML(true);                                  // set email format to HTML

    $userType = $_POST['usertype'];
    $userName = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];
    $city = $_POST['city'];

    $mail->Subject = "New user registration form";
    $mail->Body    = "New user form arrived:<br />User type: ". $userType ."<br />" .
        "User name: ". $userName ."<br />" .
        "Email: ". $email ."<br />" .
        "Phone: ". $phone ."<br />" .
        "Country: ". $country ."<br />" .
        "Address: ". $city;

    if(!$mail->Send())
    {
        $myfile = fopen("sendformerror.txt.php", "a");
        if( $myfile )
        {
            $objDateTime = new DateTime('NOW');
            $errorReport = $objDateTime->format(DateTime::ISO8601);
            $errorReport .= "\nError appeared while sending registration form:\nForm body:\n" . $mail->Body;
            $errorReport .= "\nError: " . $mail->ErrorInfo . "\n";
            fwrite($myfile, $errorReport);
            fclose($myfile);
        }
        echo "Message could not be sent. <p>";
        echo "Please, please, please report it to <a href=\"mailto:support@growow.org?subject=Error sending registration form&body=".$mail->Body."\">support@growow.org</a> Thanks!<p>";
        exit();
    }

    echo "Message has been sent";
    header('Status: 301 Moved Permanently', false, 301);
    header('Location: thanks.html');
    exit();
}
    header('Status: 301 Moved Permanently', false, 301);
    header('Location: index.html');
?>

