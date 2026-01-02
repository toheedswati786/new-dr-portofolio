<?php

if (isset($_POST['form']) && $_POST['form'] == 'done') {
    sendMail();
} else {
    echo "No data received. <br>";
    echo "Redirecting back to Home page...";
    header("refresh:3;url=/");
}

function sendMail()
{
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $msg = $_POST['message'];
    // MailerSend API Key
    $api_key = 'mlsn.438d15b55ddccdddf49c5b26c19e0514662bdc76c70c001a97e8150b71b82efb';

    // Email data
    $data = [
        "from" => [
            "email" => "admin@drnajmunriyaz.com"
        ],
        "to" => [
            [
                "email" => "office@drnajmunriyaz.com"
            ]
        ],
        "subject" => "New Contact Form Submission",
        "text" => "You have received a new message from your website contact form.\n\nName: $name\nPhone: $phone\nMessage: $msg",
        "html" => "<p>You have received a new message from your website contact form.</p><p><strong>Name:</strong> $name</p><p><strong>Phone:</strong> $phone</p><p><strong>Message:</strong> $msg</p>"
    ];

    // Initialize cURL
    $ch = curl_init("https://api.mailersend.com/v1/email");

    // Set cURL options
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Content-Type: application/json",
        "X-Requested-With: XMLHttpRequest",
        "Authorization: Bearer $api_key"
    ]);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Execute cURL
    $response = curl_exec($ch);

    // Error handling
    if (curl_errno($ch)) {
        echo 'Error: ' . curl_error($ch);
    } else {
        header("Location: not-available.php");
    }

    // Close connection
    curl_close($ch);
}
