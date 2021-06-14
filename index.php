<?php


  require 'phpmailer/Exception.php';
  require 'phpmailer/PHPMailer.php';
  require 'phpmailer/SMTP.php';

  // Include autoload.php file
  require 'phpmailer/PHPMailerAutoload.php';
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
      $mail->addAddress('itsstrangerman@gmail.com');

      $mail->isHTML(true);
      $mail->Subject = 'Form Submission';
      $mail->Body = "<h3>Name : $name <br>Email : $email <br>Message : $message</h3>";

      $mail->send();
      $output = '<div class="alert alert-success">
                  <h5>Thankyou! for contacting us, We will get back to you soon!</h5>
                </div>';
    } catch (Exception $e) {
      $output = '<div class="alert alert-danger">
                  <h5>' . $e->getMessage() . '</h5>
                </div>';
    }
  }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title></title>
  </head>
  <body>
    <header id="text-gray-600 body-font" style="background-image:url('g.jpg');" style="background-size:cover;">
      <IMG SRC="hostinger-logo.png" alt="മുല്ലമൊട്ടും മുന്തിരിച്ചാറും" WIDTH=500 HEIGHT=300>
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
          <a href="index.html" class="mr-5 hover:text-gray-900" title="home" target="_self" style="color: aliceblue;">Home</a>
          <a href="social media.html" class="mr-5 hover:text-gray-900" title="Follow Us" target="_self" style="color: aliceblue;">Follow Us</a>
           <a href="aboutus.html" class="mr-5 hover:text-gray-900" title="About Us" target="_self" style="color: aliceblue;">About Us</a>
        </nav>
        </div>
        </header>
        <section>
          <form class="text-gray-600 body-font relative" action="#" method="POST">
          <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-12">
              <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Contact Us</h1>
              <p class="lg:w-2/3 mx-auto leading-relaxed text-base">happy to hear you</p>
            </div>
            <div class="lg:w-1/2 md:w-2/3 mx-auto">
              <div class="flex flex-wrap -m-2">
                <div class="p-2 w-1/2">
                  <div class="relative">
                    <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                    <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                  </div>
                </div>
                <div class="p-2 w-1/2">
                  <div class="relative">
                    <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                    <input type="email" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                  </div>
                </div>
                <div class="p-2 w-1/2">
                  <div class="relative">
                    <label for="subject" class="leading-7 text-sm text-gray-600">Subject</label>
                    <input type="subject" id="subject" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                  </div>
                </div>
                <div class="p-2 w-full">
                  <div class="relative">
                    <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                    <textarea id="message" name="message" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                  </div>
                </div>
                <div class="p-2 w-full">
                  <input id="sendBtn" name="submit" type="submit" class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg" value="Send">
                  
                    
                  
                </div>
              </div>
            </div>
          </div>
          

        </form>
        </section>
    <hr>
    <footer class="text-gray-600 body-font">
      <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
        <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
          <span><img src="web.png" alt="Avatar" width="50"></span>
          <span class="ml-3 text-xl">mullamottum_mundhiricharum</span>
        </a>

        <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© 2020 mullamottum_mundhiricharum—
          <a href="https://www.instagram.com/itsmeammarali/" class="text-gray-600 ml-1" rel="noopener noreferrer" target="_blank">@itsmeammarali</a>
        </p>

      </div>
    </footer>
    
  </body>
</html>
