<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate input
    if (empty($_POST['name']) || empty($_POST['subject']) || empty($_POST['message']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        http_response_code(400); // Bad Request
        exit('Invalid input');
    }

    // Sanitize input data
    $name = strip_tags(htmlspecialchars(trim($_POST['name'])));
    $email = strip_tags(htmlspecialchars(trim($_POST['email'])));
    $subject = strip_tags(htmlspecialchars(trim($_POST['subject'])));
    $message = strip_tags(htmlspecialchars(trim($_POST['message'])));

    // Recipient email address
    $to = "fragiseullograu-3894@yopmail.com"; // Change this email to your desired recipient

    // Email subject
    $email_subject = "$subject: $name";

    // Email body
    $email_body = "You have received a new message from your website contact form.\n\n" .
                  "Here are the details:\n\n" .
                  "Name: $name\n" .
                  "Email: $email\n" .
                  "Subject: $subject\n" .
                  "Message: $message";

    // Email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    if (mail($to, $email_subject, $email_body, $headers)) {
        http_response_code(200); // OK
        echo 'Email sent successfully.';
    } else {
        http_response_code(500); // Internal Server Error
        echo 'Email could not be sent.';
    }
} else {
    http_response_code(405); // Method Not Allowed
    echo 'Only POST requests are allowed.';
}
?>
