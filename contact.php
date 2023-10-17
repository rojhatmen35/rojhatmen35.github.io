<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // E-posta gönderme işlemi
    $to = "alici@example.com"; // Alıcı e-posta adresi
    $headers = "From: " . $email . "\r\n"; // Gönderen e-posta adresi
    $headers .= "Reply-To: " . $email . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    $mailBody = "Name: " . $name . "<br>";
    $mailBody .= "Email: " . $email . "<br>";
    $mailBody .= "Subject: " . $subject . "<br>";
    $mailBody .= "Message: " . $message . "<br>";

    if (mail($to, $subject, $mailBody, $headers)) {
        echo "E-posta başarıyla gönderildi.";
    } else {
        echo "E-posta gönderme hatası.";
    }
}
?>
