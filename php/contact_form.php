<?php
use PHPMailer\PHPMailer\PHPMailer;
require __DIR__ . '/vendor/autoload.php';
$errors = [];
$errorMessage = '';

if (!empty($_POST)) {
   $firstName = $_POST['first_name'];
   $lastName = $_POST['last_name'];
   $email = $_POST['email_add'];
   $subject = $_POST['subject'];
   $contactMsg = $_POST['contact_msg'];

    if (empty($firstName)) {
         $errors[] = 'first Name is empty';
    }
    if (empty($lastName)) {
        $errors[] = 'Last Name is empty';
    }
    if (empty($emailAdd)) {
        $errors[] = 'Email is empty';
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Email is invalid';
    }
    if (empty($subject)) {
        $errors[] = 'The Subject is empty';
    }
    if (empty($contactMsg)) {
       $errors[] = 'Message is empty';
    }

    $fullName = $firstName + $lastName;
    if (!empty($errors)) {
        $allErrors = join('<br/>', $errors);
        $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
    }else{
        $mail = new PHPMailer();

        // specify SMTP credentials
        $mail->isSMTP();
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Username = 'd5g6bc7a7dd6c7';
        $mail->Password = '27f211b3fcad87';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 2525;

        $mail->setFrom($email, 'Mailtrap Website');
        $mail->addAddress('piotr@mailtrap.io', 'Me');
        $mail->Subject = 'New message from your website';

        // Enable HTML if needed
        $mail->isHTML(true);

        $bodyParagraphs = ["Name: {$fullName}", "Email: {$email}", "Message:", nl2br($message)];
        $body = join('<br />', $bodyParagraphs);
        $mail->Body = $body;

        echo $body;
        if($mail->send()){

            header('Location: thank-you.html'); // redirect to 'thank you' page
        } else {
            $errorMessage = 'Oops, something went wrong. Mailer Error: ' . $mail->ErrorInfo;
        }
    }
}else{
    $allErrors = join('<br/>', $errors);
    $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
}



if (!empty($_POST)) {
   
    if (!empty($errors)) {
       
    } else {
        $mail = new PHPMailer();

        // specify SMTP credentials
        $mail->isSMTP();
        $mail->Host = 'smtp.mailtrap.io';
        $mail->SMTPAuth = true;
        $mail->Username = 'd5g6bc7a7dd6c7';
        $mail->Password = '27f211b3fcad87';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 2525;

        $mail->setFrom($email, 'Mailtrap Website');
        $mail->addAddress('piotr@mailtrap.io', 'Me');
        $mail->Subject = 'New message from your website';

        // Enable HTML if needed
        $mail->isHTML(true);

        $bodyParagraphs = ["Name: {$name}", "Email: {$email}", "Message:", nl2br($message)];
        $body = join('<br />', $bodyParagraphs);
        $mail->Body = $body;

        echo $body;
        if($mail->send()){

            header('Location: thank-you.html'); // redirect to 'thank you' page
        } else {
            $errorMessage = 'Oops, something went wrong. Mailer Error: ' . $mail->ErrorInfo;
        }
    }
}