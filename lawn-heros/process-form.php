<?php
// Include the ZeptoMail function we created earlier
require_once 'mailer.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 1. Set your recipient email
    $recipient_email = "contact@ervotechep.com";

    // 2. Sanitize form data
    $name    = strip_tags(trim($_POST["fullName"]));
    $phone   = strip_tags(trim($_POST["phone"]));
    $email   = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $service = strip_tags(trim($_POST["service"]));

    // 3. Basic validation
    if (empty($name) || empty($phone) || empty($service)) {
        header("Location: " . explode('?', $_SERVER['HTTP_REFERER'])[0] . "?status=error");
        exit;
    }

    // 4. Construct the email subject and HTML body
    $subject = "New Lead: $service - $name";

    // ZeptoMail likes HTML, so let's format it nicely
    $html_content = "<h2>New Estimate Request: Lawn Heros</h2>";
    $html_content .= "<p><strong>Service:</strong> $service</p>";
    $html_content .= "<p><strong>Name:</strong> $name</p>";
    $html_content .= "<p><strong>Phone:</strong> $phone</p>";
    if (!empty($email)) {
        $html_content .= "<p><strong>Email:</strong> $email</p>";
    }

    // 5. Use the ZeptoMail function instead of mail()
    // We pass the project name as 'Lawn Heros' for your sandbox tracker
    $emailData = [
        'project' => 'Lawn Heros',
        'subject' => $subject,
        'body'    => $html_content
    ];

    if (sendZeptoEmail($emailData)) {
        // Success!
        $referer = explode('?', $_SERVER['HTTP_REFERER'])[0];
        header("Location: " . $referer . "?status=success");
        exit;
    } else {
        // Failed
        header("Location: " . explode('?', $_SERVER['HTTP_REFERER'])[0] . "?status=error");
        exit;
    }
} else {
    header("Location: index.php");
    exit;
}
