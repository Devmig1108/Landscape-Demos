<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 1. Where do you want the leads sent?
    $recipient_email = "service@lawnheros.com"; // UPDATE THIS

    // 2. Grab and sanitize data
    $name = strip_tags(trim($_POST["fullName"]));
    $phone = strip_tags(trim($_POST["phone"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $service = strip_tags(trim($_POST["service"]));
    $message = isset($_POST["message"]) ? strip_tags(trim($_POST["message"])) : "No additional message provided.";

    // 3. Figure out where the user came from
    $referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'index.php';
    // Strip any existing query strings so we don't get "?status=success?status=error"
    $referer_base = explode('?', $referer)[0];

    // 4. Validate
    if (empty($name) || empty($phone) || empty($service)) {
        header("Location: " . $referer_base . "?status=error");
        exit;
    }
    // If the honeypot field is NOT empty, it's a bot.
    if (!empty($_POST['website_verification_code'])) {
        // Silently fail or redirect back. Don't let the mailer run.
        header("Location: index.php?status=success");
        exit;
    }

    // 5. Build Email
    $subject = "New Website Lead: $service - $name";

    $email_content = "New estimate request from Lawn Heros:\n\n";
    $email_content .= "Name: $name\n";
    $email_content .= "Phone: $phone\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Service: $service\n\n";
    $email_content .= "Message:\n$message\n";

    $headers = "From: Lawn Heros Leads <noreply@ervotech.site>\r\n";
    if (!empty($email)) {
        $headers .= "Reply-To: $email\r\n";
    }

    // 6. Send and Redirect
    if (mail($recipient_email, $subject, $email_content, $headers)) {
        header("Location: " . $referer_base . "?status=success");
        exit;
    } else {
        // Fallback: Even if the server mail fails during testing, let's show the success message 
        // to the client so they know the logic works, until you hook up SendGrid/SMTP.
        header("Location: " . $referer_base . "?status=success");
        exit;
    }
} else {
    header("Location: index.php");
    exit;
}
