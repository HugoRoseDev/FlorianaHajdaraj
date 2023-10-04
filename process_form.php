<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process form data and send email
    
    // Replace the following lines with your actual email handling logic
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Replace with your email sending code (e.g., using the mail() function)
    $to = "florianahajdaraj87@gmail.com";
    $subject = "New contact form submission from $fullname";
    $headers = "From: $email\r\n";
    
    // Send the email
    mail($to, $subject, $message, $headers);
    
    // Redirect to a thank you page or display a confirmation message
    header("Location: thank_you.html"); // Replace with your thank you page
    exit;
}
?>
