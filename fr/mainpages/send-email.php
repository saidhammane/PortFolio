<?php
require "../vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = "Conact Form Portfolio";
  $message = $_POST['message'];

  $mail = new PHPMailer(true);

  // SMTP settings
  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'medm00871@gmail.com';
  $mail->Password = 'jtluoiiudbwddymb';
  $mail->SMTPSecure = 'tls';
  $mail->Port = 587;

  // Sender and recipient
  $mail->setFrom($email, $name);
  $mail->addAddress('medm00871@gmail.com');
  $mail->addAddress('saidhammane26@gmail.com');
  $mail->addAddress('said.hammane1@gmail.com');

  // Email content
  $mail->isHTML(true);
  $mail->Subject = $subject;
  $mail->Body = "<h1>New Message From Contact Form</h1>
                    <p>Dear Said HAMMANE,</p>
                    <p>You have received a new message from your contact form. Here are the details:</p>
                    <ul>
                        <li><strong>Name:</strong> ".$name."</li>
                        <li><strong>Email:</strong> ".$email."</li>
                        <li><strong>Message:</strong> ".$message."</li>
                    </ul>
                    <p>Please respond to this email as soon as possible.</p>
                    <p>Thank you,</p>
                    <p>Said HAMMANE<p>";

  if ($mail->send()) {
    echo 'Email sent successfully!';
  } else {
    echo 'An error occurred while sending the email.';
  }
}
?>