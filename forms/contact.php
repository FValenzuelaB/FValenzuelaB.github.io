<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "pipevb@gmail.com";  // <-- tu correo
    $subject = $_POST["subject"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $headers = "From: $name <$email>" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    $body = "You have received a new message from your portfolio contact form.\n\n" .
            "Here are the details:\n\n" .
            "Name: $name\n" .
            "Email: $email\n" .
            "Message:\n$message";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Sorry, your message could not be sent.";
    }
}
?>
