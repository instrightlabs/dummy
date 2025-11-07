<?php
// Simple contact form handler.
// WARNING: This is a basic script. For production use, configure SMTP and proper sanitization/CSRF protection.

function clean($s){
    return htmlspecialchars(strip_tags(trim($s)));
}

$to = "info@swarajsecurity.com"; // <-- change to your email
$subject = "Website Contact Request - SwarajSecurity";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = clean($_POST['name'] ?? '');
    $phone = clean($_POST['phone'] ?? '');
    $email = clean($_POST['email'] ?? '');
    $service = clean($_POST['service'] ?? '');
    $message = clean($_POST['message'] ?? '');

    if (!$name || !$phone) {
        $_SESSION['error'] = "Please provide name and phone.";
        header("Location: contact.html");
        exit;
    }

    $body = "Name: $name\nPhone: $phone\nEmail: $email\nService: $service\nMessage: $message\n";
    $headers = "From: no-reply@swarajsecurity.com\r\nReply-To: $email\r\n";

    // Try to send mail.
    $sent = mail($to, $subject, $body, $headers);

    if ($sent) {
        echo '<!doctype html><html><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Thank you</title><link rel="stylesheet" href="assets/style.css"></head><body><div class="container" style="padding-top:40px;"><div class="success"><h2>Thank you</h2><p>Your request has been received. We will call you soon.</p><p><a href="index.html">Return to home</a></p></div></div></body></html>';
        exit;
    } else {
        echo '<!doctype html><html><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Error</title><link rel="stylesheet" href="assets/style.css"></head><body><div class="container" style="padding-top:40px;"><div class="error"><h2>Error</h2><p>Unable to send message. Please try again later or email info@swarajsecurity.com</p><p><a href="contact.html">Return to contact</a></p></div></div></body></html>';
        exit;
    }
} else {
    header("Location: contact.html");
    exit;
}
?>
