<?php
require('admin/connection.inc.php');
require "PHPMailer/PHPMailerAutoload.php";
function smtpmailer($to, $from, $from_name, $subject, $body)
  {
        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true; 
        $mail->SMTPSecure = 'ssl'; 
        $mail->Host = 'mail.iconichomehardware.com';
        $mail->Port = 465;  
        $mail->Username = $mailusername;
        $mail->Password = $mailpassword;
   //   $path = 'reseller.pdf';
   //   $mail->AddAttachment($path);
        $mail->IsHTML(true);
        $mail->From=$from;
        $mail->FromName=$from_name;
        $mail->Sender=$from;
        $mail->AddReplyTo($from, $from_name);
        $mail->Subject = $subject;
        $mail->Body = $body;
        $mail->AddAddress($to);
        if(!$mail->Send())
        {
            $error ="Please try Later, Error Occured while Processing...";
            return $error; 
        }
        else 
        {
            $error = "Thanks You !! Your email is sent.";  
            return $error;
        }
    }
if(isset($_POST["submit"])){
   // echo "<script>alert('here')</script>";
$ourmail = 'sales@iconichomehardware.com';
$email=$_POST['email'];
$name = $_POST['name'];
$subject=$_POST['subject'];
$phone=$_POST['phone'];
$date=date("Y-m-d");
$msg ="Name :".$_POST['name']."<br>Contacr No:".$_POST['phone']."<br>Subject :".$_POST['subject']."<br>Massege :".$_POST['msg'];
$subj = 'Products Inquiry';

$error=smtpmailer($ourmail,$email, $name ,$subject, $msg);
    $to   = $_POST['email'];
    $from = 'sales@iconichomehardware.com';
    $name ='Iconic Home Hardware';
    $subj = 'Products Inquiry';
    $msg = '<p>Thank you for your inquiry regarding our Products.<br>
Your inquiry will be reviewed by the concerned team and will be getting in touch with you soon.<br>
Thanks again for your interest.<br><br>
<span>Best Regards</span><br>
<span>Iconic Home Hardware Team</span><br><br>
To know more about our products please visit: - <br><br>
Instagram: - https://www.instagram.com/iconichomehardware/<br><br>
Facebook: - https://www.facebook.com/iconichomehardware/<br><br>
Website: - http://iconichomehardware.com/</p>';
$error=smtpmailer($to,$from, $name ,$subj, $msg);
}
?>