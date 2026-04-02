<?php
// Only process POST requests
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // 1. Set your email address where you want to receive leads
    $recipient_email = "contact@ervotechep.com"; // CHANGE THIS TO CLIENT EMAIL
    
    // 2. Sanitize and grab the form data
    $name = strip_tags(trim($_POST["fullName"]));
    $phone = strip_tags(trim($_POST["phone"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $service = strip_tags(trim($_POST["service"]));
    
    // 3. Basic validation
    if (empty($name) || empty($phone) || empty($service)) {
        // Redirect back with an error
        header("Location: " . $_SERVER["HTTP_REFERER"] . "?status=error");
        exit;
    }

    // 4. Construct the email subject and body
    $subject = "New Lead: $service - $name";
    
    $email_content = "You have received a new estimate request from the Lawn Heros website.\n\n";
    $email_content .= "Name: $name\n";
    $email_content .= "Phone: $phone\n";
    if (!empty($email)) {
        $email_content .= "Email: $email\n";
    }
    $email_content .= "Service Requested: $service\n";

    // 5. Build the email headers
    $headers = "From: Lawn Heros Website <noreply@lawnheros.com>\r\n";
    if (!empty($email)) {
        $headers .= "Reply-To: $email\r\n";
    }

    // 6. Send the email using PHP's mail() function
    if (mail($recipient_email, $subject, $email_content, $headers)) {
        // Success! Redirect back to the previous page with a success flag
        // The explode gets rid of any existing query strings so it doesn't duplicate
        $referer = explode('?', $_SERVER['HTTP_REFERER'])[0];
        header("Location: " . $referer . "?status=success");
        exit;
    } else {
        // Failed to send
        header("Location: " . $_SERVER['HTTP_REFERER'] . "?status=error");
        exit;
    }

} else {
    // If someone tries to visit process-form.php directly, kick them back to home
    header("Location: index.php");
    exit;
}
?>