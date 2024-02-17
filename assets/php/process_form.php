<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // You can customize the email subject and recipient
    $to = "rijad.maglic@unvi.edu.ba";
    $subject = "Email sa websajta";

    // Create the email message
    $email_message = "Name: $name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Message:\n$message";

    // Additional headers
    $headers = "From: $email\r\n";

    // Use the mail() function to send the email
    mail($to, $subject, $email_message, $headers);

    // Redirect the user back to the form or a thank you page
    header("Location: index.html");
    exit();
}
?>
