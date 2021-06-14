<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

  // Include autoload.php file
  require 'vendor/autoload.php';
  // Create object of PHPMailer class
  $mail = new PHPMailer(true);

  $output = '';

  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    try {
      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      // Gmail ID which you want to use as SMTP server
      $mail->Username = 'jarvisai.ironmanmark@gmail.com';
      // Gmail Password
      $mail->Password = 'jarvis.mark';
      
      $mail->Port = 587;

      // Email ID from which you want to send the email
      $mail->setFrom('jarvisai.ironmanmark@gmail.com');
      // Recipient Email ID where you want to receive emails
      $mail->addAddress($email);

      $mail->isHTML(true);
      $mail->Subject = $subject;
      $mail->Body = "<h3>Name : $name <br>Email : $email <br>Message : $message</h3>";

      if($mail->send()){
        echo '<div class="alert alert-success">
        <h5>Thankyou! for contacting us, We will get back to you soon!</h5>
      </div>';
      }
     
      
    } catch (Exception $e) {
      $output = '<div class="alert alert-danger">
                  <h5>' . $e->getMessage() . '</h5>
                </div>';
      echo $output;
    }
  }
  
?>

