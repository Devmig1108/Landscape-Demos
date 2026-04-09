<?php
// 1. YOUR NEW LAWN HEROS TOKEN
$apiKey = "Zoho-enczapikey wSsVR61x+R/0CKp0zWb/L7w9yFUDBgz1EE4u2FOk4iD0SPyTocdqlBLJVlOnSfJNRWU6HTdBo799y01W2zJfjd0qnlADXSiF9mqRe1U4J3x17qnvhDzNXWxcmhCNLowAxgRpmmNjG8on+g==";

$url = "https://api.zeptomail.com/v1.1/email";

$payload = json_encode([
    "from" => ["address" => "contact@lawnheros.com", "name" => "Lawn Heros Test"],
    "to" => [["email_address" => ["address" => "miguel@ervotechep.com", "name" => "Miguel Flores"]]],
    "subject" => "HostGator Server Test",
    "htmlbody" => "<h3>Success!</h3><p>HostGator is talking to ZeptoMail.</p>",
    
    // THIS IS THE KEY: It must match the 'bounce-zem' record in your screenshot
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
    // HostGator handles SSL better than your legacy Nginx did, 
    // but we'll keep this as a fallback for now.
    CURLOPT_SSL_VERIFYPEER => false 
]);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$curlError = curl_error($ch);
curl_close($ch);

echo "<h2>ZeptoMail Test Results</h2>";
echo "HTTP Code: " . $httpCode . "<br>";
if ($curlError) echo "Curl Error: " . $curlError . "<br>";
echo "API Response: " . $response;