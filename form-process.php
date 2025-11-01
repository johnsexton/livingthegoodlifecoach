<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(strip_tags($_POST['name']));
    $email = htmlspecialchars(strip_tags($_POST['email']));
    $message = htmlspecialchars(strip_tags($_POST['message']));

    if (!empty($name) && !empty($email) && !empty($message)) {
        $to = "your-email@example.com"; // Replace with your email
        $subject = "New Consultation Request from $name";
        $body = "Name: $name\nEmail: $email\nMessage:\n$message";
        $headers = "From: $email";

        if (mail($to, $subject, $body, $headers)) {
            echo "Thank you! Your message has been sent.";
        } else {
            echo "Oops! Something went wrong. Please try again.";
        }
    } else {
        echo "Please fill in all fields.";
    }
} else {
    echo "Invalid request.";
}
?>
