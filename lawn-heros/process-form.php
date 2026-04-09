<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 1. Where do you want the leads sent?
    // $recipient_email = "service@lawnheros.com";
    $recipient_email = "service@lawnheros.com";

    // 2. Grab and sanitize data
    $name = strip_tags(trim($_POST["fullName"]));
    $phone = strip_tags(trim($_POST["phone"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $service = strip_tags(trim($_POST["service"]));
    $message = isset($_POST["message"]) ? strip_tags(trim($_POST["message"])) : "No additional message provided.";

    // 3. Figure out where the user came from
    $referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'index.php';
    $referer_base = explode('?', $referer)[0];

    // 4. Validate
    if (empty($name) || empty($phone) || empty($service)) {
        header("Location: " . $referer_base . "?status=error");
        exit;
    }
    // Honeypot check
    if (!empty($_POST['website_verification_code'])) {
        header("Location: index.php?status=success");
        exit;
    }

    // 5. ZeptoMail Integration
    $apiKey = "Zoho-enczapikey wSsVR61x+R/0CKp0zWb/L7w9yFUDBgz1EE4u2FOk4iD0SPyTocdqlBLJVlOnSfJNRWU6HTdBo799y01W2zJfjd0qnlADXSiF9mqRe1U4J3x17qnvhDzNXWxcmhCNLowAxgRpmmNjG8on+g==";
    $url = "https://api.zeptomail.com/v1.1/email";

    $subject = "New Website Lead: $service - $name";

    // Build HTML Body for a professional look
    $htmlBody = "
        <h2>New Estimate Request</h2>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Phone:</strong> $phone</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Service Requested:</strong> $service</p>
        <p><strong>Message:</strong><br>$message</p>
    ";

    $payload = json_encode([
        "from" => ["address" => "services@lawnheros.com", "name" => "Lawn Heros"],
        "to" => [["email_address" => ["address" => $recipient_email, "name" => "Lawn Heros Service"]]],
        "reply_to" => [["address" => $email, "name" => $name]],
        "subject" => $subject,
        "htmlbody" => $htmlBody,
        "bounce_address" => "bounce@bounce-zem.lawnheros.com"
    ]);

    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST           => true,
        CURLOPT_POSTFIELDS     => $payload,
        CURLOPT_HTTPHEADER     => [
            "Content-Type: application/json",
            "Authorization: $apiKey",
            "Accept: application/json"
        ],
        CURLOPT_SSL_VERIFYPEER => false
    ]);

    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    // 6. Redirect based on API response
    if ($httpCode == 201) {
        header("Location: " . $referer_base . "?status=success");
        exit;
    } else {
        // Log error locally if needed: error_log($response);
        header("Location: " . $referer_base . "?status=error");
        exit;
    }
} else {
    header("Location: index.php");
    exit;
}
