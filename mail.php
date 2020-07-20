<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/main.css">
</head>
</html>
<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent=" From: $name \n Email: $email \n Message: $message";
$recipient = "admin@heydaysfurniture.co.uk";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "<section class='landing_page'>
<section class='thank_container'>
    <div class='thank_title'>Thank you for your message!</div>
    <div class='thank_content'>I will get back to you as soon as possible.</div><br>
    <a href='home.html' class='thank_home'>Back to site</a>
</section>
</section>
";
?>

