<?php

// Email address verification
function isEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

if($_POST) {

    // Enter the email where you want to receive the message
    $emailTo = 'orders@baguettemarraine.shoes';

    $clientEmail = addslashes(trim($_POST['email']));
    $name = addslashes(trim($_POST['name']));
    $productName = addslashes(trim($_POST['productName']));
    $size = addslashes(trim($_POST['size']));
    $message = addslashes(trim($_POST['message']));
    $antispam = addslashes(trim($_POST['antispam']));

    $array = array('emailMessage' => '', 'nameMessage' => '', 'productNameMessage' => '', 'sizeMessage' => '', 'messageMessage' => '', 'antispamMessage' => '');

    if(!isEmail($clientEmail)) {
        $array['emailMessage'] = 'Invalid email!';
    }
    if($name == '') {
        $array['nameMessage'] = 'Empty Name!';
    }
    if($productName == '') {
        $array['productNameMessage'] = 'Empty product name!';
    }
    if($size == '') {
        $array['sizeMessage'] = 'Empty size!';
    }
    if($message == '') {
        $array['messageMessage'] = 'Empty message!';
    }
    if($antispam != '12') {
        $array['antispamMessage'] = 'Wrong antispam answer!';
    }
    if(isEmail($clientEmail) && $name != '' && $productName != '' && $size != '' && $message != '' && $antispam == '12') {
        // Send email
        $headers = "From: " . $clientEmail . " <" . $clientEmail . ">" . "\r\n" . "Reply-To: " . $clientEmail;
        mail($emailTo, $name, "Product Name: ". $productName . "\n". "Size: ". $size . "\n\n" . "Message: " . $message, $headers);
    }

    echo json_encode($array);

}

?>
