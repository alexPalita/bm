<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim(filter_input(INPUT_POST,"name",FILTER_SANITIZE_STRING));
    $email = trim(filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL));
    $productName = trim(filter_input(INPUT_POST,"productName",FILTER_SANITIZE_STRING));
    $size = trim(filter_input(INPUT_POST,"size",FILTER_SANITIZE_STRING));
    $details = trim(filter_input(INPUT_POST,"details",FILTER_SANITIZE_SPECIAL_CHARS));
    $height = trim(filter_input(INPUT_POST,"height",FILTER_SANITIZE_STRING));


    require '../inc/PHPMailer-stable/class.phpmailer.php';
    $mail = new PHPMailer;



    $message=[];
    $message['name']='';
    $message['email']='';
    $message['productName']='';
    $message['size']='';
    $message['success']='';
    $message['error']='';


    $selector=[];
    $selector['name'] = '';
    $selector['email'] = '';
    $selector['productName'] = '';
    $selector['size'] = '';

    if ($name == null) {
        $signal = 'bad';
        $message['name'] = 'Name';
        $selector['name'] = '#name';
    }
    if ($email == null) {
        $signal = 'bad';
        $message['email'] = 'Email';
        $selector['email'] = '#email';
    }
    if ($productName == null) {
        $signal = 'bad';
        $message['productName'] = 'Product Name';
        $selector['productName'] = '#productName';
    }
    if ($size == null) {
        $signal = 'bad';
        $message['size'] = 'Size';
        $selector['size']='#size';
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

    if (!isset($signal) && ($name != null || $email != null || $productName != null || $size != null) ) {

            $email_body = "";
            $email_body .= "Sender e-mail: ".$email."\n";
            $email_body .= "Sender Name: ".$name."\n\n";
            $email_body .= "Product Name: ".$productName ."\n";
            $email_body .= "Product Size: ". $size . "\n\n";
            $email_body .= "Details: " . $details;

            $mail->setFrom('site@baguettemarraine.shoes');
            $mail->addAddress('dev.ign.codes@gmail.com', 'Alex P.');     // Add a recipient
            $mail->addReplyTo($email,$name);
            $mail->isHTML(false);                                  // Set email format to HTML

            $mail->Subject = "BM-Order From: ".$name;
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
