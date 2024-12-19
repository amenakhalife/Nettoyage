<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  // $receiving_email_address = 'contact@example.com';

  // if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
  //   include( $php_email_form );
  // } else {
  //   die( 'Unable to load the "PHP Email Form" Library!');
  // }

  // $book_a_table = new PHP_Email_Form;
  // $book_a_table->ajax = true;
  
  // $book_a_table->to = $receiving_email_address;
  // $book_a_table->from_name = $_POST['name'];
  // $book_a_table->from_email = $_POST['email'];
  // $book_a_table->subject = "New table booking request from the website";

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  /*
  $book_a_table->smtp = array(
    'host' => 'example.com',
    'username' => 'example',
    'password' => 'pass',
    'port' => '587'
  );
  */

//   $book_a_table->add_message( $_POST['name'], 'Name');
//   $book_a_table->add_message( $_POST['email'], 'Email');
//   $book_a_table->add_message( $_POST['phone'], 'Phone', 4);
//   $book_a_table->add_message( $_POST['date'], 'Date', 4);
//   $book_a_table->add_message( $_POST['time'], 'Time', 4);
//   $book_a_table->add_message( $_POST['people'], '# of people', 1);
//   $book_a_table->add_message( $_POST['message'], 'Message');

//   echo $book_a_table->send();
// ?>


<?php
// Check if the form was submitted
// if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Sanitize and retrieve the form data
    // $name = htmlspecialchars($_POST['name']);
    // $email = htmlspecialchars($_POST['email']);
    // $phone = htmlspecialchars($_POST['phone']);
    // $date = htmlspecialchars($_POST['date']);
    // $time = htmlspecialchars($_POST['time']);
    // $service = htmlspecialchars($_POST['service']);
    // $message = htmlspecialchars($_POST['message']);

    // The email address where you want to receive the form data
    // $to = "nettoyageenor@hotmail.com"; // Replace with your email address
    // $subject = "New Service Booking Request";

    // Email body content
    // $body = "
    //     <html>
    //     <head>
    //         <title>Service Booking Request</title>
    //     </head>
    //     <body>
    //         <h2>New Service Booking Request</h2>
    //         <p><strong>Name:</strong> $name</p>
    //         <p><strong>Email:</strong> $email</p>
    //         <p><strong>Phone:</strong> $phone</p>
    //         <p><strong>Date:</strong> $date</p>
    //         <p><strong>Time:</strong> $time</p>
    //         <p><strong>Service:</strong> $service</p>
    //         <p><strong>Message:</strong> $message</p>
    //     </body>
    //     </html>
    // ";

    // Email headers
    // $headers = "From: $email\r\n";
    // $headers .= "Reply-To: $email\r\n";
    // $headers .= "MIME-Version: 1.0\r\n";
    // $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Send the email
    // if (mail($to, $subject, $body, $headers)) {
        // Redirect or show a success message
    //     echo '<script>alert("Your booking request was sent successfully."); window.location.href = "/";</script>';
    // } else {
        // Handle error in sending email
//         echo '<script>alert("There was an error sending your booking request. Please try again."); window.history.back();</script>';
//     }
// }
?>
