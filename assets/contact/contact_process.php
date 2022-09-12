<head>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<div class="jumbotron text-center">
  <h1 class="display-3">Thank You!</h1>
  <a href="index.html" class="text-black h2 mb-0"><img src="images/logo4.png" class="logo-img"  alt=""></a>
  <p class="lead"><strong>Your Message Has been Received Successfully!</strong> We will get back to you as soon as possible.</p>
  <p>Have a nice day</p>
  <hr>

  <p class="lead">
    <a class="btn btn-primary btn-sm" href="https://richardfernando.com/technomiq" role="button">Continue to homepage</a>
  </p>
</div>



<?php





    $firstName = $_POST['firstname'];
    $lastName = $_POST['lastname'];
    $email = $_POST['email'];
    $messageSubject = $_POST['subject'];
    $message = $_POST['message'];
    $headers = 'From: mail@richardfernando.com' . "\r\n" .
   'Reply-To: connect.richard26@gmail.com' . "\r\n" .
   'X-Mailer: PHP/' . phpversion();

    $to = "connect.richard26@gmail.com";

    $body = "";
    $body .= "From: ".$firstName. "\r\n";
    $body .= "Email: ".$email. "\r\n";
    $body .= "Subject: ".$messageSubject. "\r\n";
    $body .= "Message: ".$message. "\r\n";

    mail($to, $messageSubject, $body, $headers);


?>