<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Email address where you want to receive the form submission
    $to = "giulialoomis@usf.edu";
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    
    // Send email
    if (mail($to, $subject, $body)) {
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
} else {
    // If the form is not submitted via POST, redirect to the form page
    header("Location: contact.html");
    exit;
}
?>
