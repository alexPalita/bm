<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim(filter_input(INPUT_POST,"name",FILTER_SANITIZE_STRING));
    $subject = trim(filter_input(INPUT_POST,"subject",FILTER_SANITIZE_STRING));
    $email = trim(filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL));
    $emailMessage = trim(filter_input(INPUT_POST,"emailMessage",FILTER_SANITIZE_SPECIAL_CHARS));
    $height = trim(filter_input(INPUT_POST,"height",FILTER_SANITIZE_STRING));


    require '../inc/PHPMailer-stable/class.phpmailer.php';
    $mail = new PHPMailer;



    $message=[];
    $message['name']='';
    $message['subject']='';
    $message['email']='';
    $message['success']='';
    $message['error']='';


    $selector=[];
    $selector['name'] = '';
    $selector['subject'] = '';
    $selector['email'] = '';

    if ($name == null) {
        $signal = 'bad';
        $message['name'] = 'Name';
        $selector['name'] = '#name';
    }
    if ($subject == null) {
        $signal = 'bad';
        $message['subject'] = 'Subject';
        $selector['subject'] = '#subject';
    }
    if ($email == null) {
        $signal = 'bad';
        $message['email'] = 'Email';
        $selector['email'] = '#email';
    }

    if (!isset($signal) && $_POST["height"] != "") {
        $signal = 'badRobot';
        $message = "Robotized Input";
    }

    if (!isset($signal) && !$mail->validateAddress($email)) {
        $signal = 'badEmail';
        $message["email"]= "Invalid Email Address";
        $selector['email']='#email';
    }

    if (!isset($signal) && ($name != null || $subject != null || $email != null) ) {

            $email_body = "";
            $email_body .= "Sender Name: ".$name."\n\n";
            $email_body .= "Sender e-mail: ".$email."\n\n";
            $email_body .= "Subject: ".$subject ."\n";
            $email_body .= "Message: " . $emailMessage;

            $mail->setFrom('site@baguettemarraine.shoes');
            $mail->addAddress('dev.ign.codes@gmail.com', 'Alex P.');     // Add a recipient
            $mail->addReplyTo($email,$name);
            $mail->isHTML(false);                                  // Set email format to HTML

            $mail->Subject = "BM-Message From: ".$name ."-".$emailMessage;
            $mail->Body    = $email_body;

            if(!$mail->send()) {
                $signal = 'bad';
                $message  = 'Message could not be sent.';
                $message .= 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                $signal = 'ok';
                $message['success'] = 'Thank you for choosing us! We will get back to you very soon.';
            }
        }

    $message = array_filter($message);
    $outputMsg = "";
    foreach ($message as $key => $value) {
        $outputMsg .= " ".$value.",";
    }

    $selector = array_filter($selector);
    $outputSelector = "";
    foreach ($selector as $id => $value) {
        $outputSelector .= " ".$value.",";
    }

    $data = array (
        'signal' => $signal,
        'msg' => rtrim($outputMsg,','),
        'selector' => rtrim($outputSelector,',')
    );
    echo json_encode($data);
}
