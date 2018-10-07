<?php/*
use PHPMailer\PHPMailer\PHPMailer;
require '../vendor/autoload.php';
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'mx1.hostinger.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = 'contact@antoinevanderbrecht.fr';
    $mail->Password = 'EMAIL_ACCOUNT_PASSWORD';
    $mail->setFrom('contact@antoinevanderbrecht.fr', 'Antoine Vanderbrecht');
    $mail->addAddress('example@gmail.com', 'Receiver Name');
    if ($mail->addReplyTo($_POST['email'], $_POST['name'])) {
        $mail->Subject = 'PHPMailer contact form';
        $mail->isHTML(false);
        $mail->Body = <<<EOT
Email: {$_POST['email']}
Name: {$_POST['name']}
Message: {$_POST['message']}
EOT;
        if (!$mail->send()) {
            $msg = 'Sorry, something went wrong. Please try again later.';
        } else {
            $msg = 'Message sent! Thanks for contacting us.';
        }
    } else {
        $msg = 'Invalid email address, message ignored.';
    }
    */
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact form</title>
</head>
<body>
<h1>Let's get in touch!</h1>


<?php /*if (!empty($msg)) {
    echo "<h2>$msg</h2>";
}*/ ?>


<form method="POST">
    <label for="name">Name: <input type="text" name="name" id="name"></label><br><br>
    
    <label for="email">Email: <input type="email" name="email" id="email"></label><br><br>
    
    <label for="message">Message: <textarea name="message" id="message" rows="8" cols="20"></textarea></label><br><br>
    <input type="submit" value="Send">
</form>
</body>
</html>