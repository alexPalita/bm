<?php

// Email address verification
function isEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

if($_POST) {

    // Enter the email where you want to receive the message
    $emailTo = 'message@baguettemarraine.shoes';

    $clientEmail = addslashes(trim($_POST['email']));
    $name = addslashes(trim($_POST['name']));
    $subject = addslashes(trim($_POST['subject']));
    $message = addslashes(trim($_POST['message']));
    $antispam = addslashes(trim($_POST['antispam']));

    $array = array('emailMessage' => '', 'nameMessage' => '', 'subjectMessage' => '', 'messageMessage' => '', 'antispamMessage' => '');

    if(!isEmail($clientEmail)) {
        $array['emailMessage'] = 'Invalid email!';
    }
    if($name == '') {
        $array['nameMessage'] = 'Empty Name!';
    }
    if($subject == '') {
        $array['subjectMessage'] = 'Empty subject!';
    }
    if($message == '') {
        $array['messageMessage'] = 'Empty message!';
    }
    if($antispam != '12') {
        $array['antispamMessage'] = 'Wrong antispam answer!';
    }
    if(isEmail($clientEmail) && $name != '' && $subject != '' && $message != '' && $antispam == '12') {
        // Send email
        $headers = "From: " . $clientEmail . " <" . $clientEmail . ">" . "\r\n" . "Reply-To: " . $clientEmail;
        mail($emailTo, $name .'-'. $subject, $message, $headers);
    }

    echo json_encode($array);

}

?>
