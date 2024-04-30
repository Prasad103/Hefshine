<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);

    // Validate input (you can add more validation as needed)
    if (empty($name) || empty($email) || empty($message)) {
        echo "Please fill in all fields.";
        exit;
    }

    // Send email
    $to = "hefshine@gmail.com";
    $subject = "New Contact Form Submission: $subject";
    $body = "Name: $name\nEmail: $email\nSubject: $subject\n\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message. Please try again later.";
    }
} else {
    echo "Invalid request.";
}
?>
