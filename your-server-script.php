<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"]; 
    $name = $_POST["name"];   

    $to = "naledi29motsoikha@email.com";  

    $subject = "Contact Form Submission";
    $message = "Name: " . $name . "\nMessage: " . $message;

    $headers = "From: " . $name . "\r\n" .
               "Reply-To: " . $email . "\r\n" . 
               "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for your message. We will be in touch shortly.";
    } else {
        echo "There was an error sending your message. Please try again later.";
    }
} else {
    echo "Form not submitted.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Thank you for your submission!</h1>
    <p>Name: <?php echo $name; ?></p>
    <p>Email: <?php echo $email; ?></p>
    <p>Message: <?php echo $message; ?></p>
</body>
</html>


