<?php

// Email address verification
// function isEmail($email) {
//     return filter_var($email, FILTER_VALIDATE_EMAIL);
// }
//
// if($_POST) {

    // Enter the email where you want to receive the message
//     $emailTo = 'orders@baguettemarraine.shoes';
//
//     $clientEmail = addslashes(trim($_POST['email']));
//     $name = addslashes(trim($_POST['name']));
//     $productName = addslashes(trim($_POST['productName']));
//     $size = addslashes(trim($_POST['size']));
//     $message = addslashes(trim($_POST['message']));
//     $antispam = addslashes(trim($_POST['antispam']));
//
//     $array = array('emailMessage' => '', 'nameMessage' => '', 'productNameMessage' => '', 'sizeMessage' => '', 'messageMessage' => '', 'antispamMessage' => '');
//
//     if(!isEmail($clientEmail)) {
//         $array['emailMessage'] = 'Invalid email!';
//     }
//     if($name == '') {
//         $array['nameMessage'] = 'Empty Name!';
//     }
//     if($productName == '') {
//         $array['productNameMessage'] = 'Empty product name!';
//     }
//     if($size == '') {
//         $array['sizeMessage'] = 'Empty size!';
//     }
//     if($message == '') {
//         $array['messageMessage'] = 'Empty message!';
//     }
//     if($antispam != '12') {
//         $array['antispamMessage'] = 'Wrong antispam answer!';
//     }
//     if(isEmail($clientEmail) && $name != '' && $productName != '' && $size != '' && $message != '' && $antispam == '12') {
//         // Send email
//         $headers = "From: " . $clientEmail . " <" . $clientEmail . ">" . "\r\n" . "Reply-To: " . $clientEmail;
//         mail($emailTo, $name, "Product Name: ". $productName . "\n". "Size: ". $size . "\n\n" . "Message: " . $message, $headers);
//     }
//
//     echo json_encode($array);
//
// }



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = trim(filter_input(INPUT_POST,"firstName",FILTER_SANITIZE_STRING));
    $lastName = trim(filter_input(INPUT_POST,"lastName",FILTER_SANITIZE_STRING));
    $email = trim(filter_input(INPUT_POST,"email",FILTER_SANITIZE_EMAIL));
    $productName = trim(filter_input(INPUT_POST,"productName",FILTER_SANITIZE_STRING));
    $size = trim(filter_input(INPUT_POST,"size",FILTER_SANITIZE_NUMBER_FLOAT);
    $details = trim(filter_input(INPUT_POST,"details",FILTER_SANITIZE_SPECIAL_CHARS));


    require '../inc/PHPMailer-stable/class.phpmailer.php';
    $mail = new PHPMailer;

    // $array = array(
    //                 'firstNameMessage'   => '',
    //                 'lastNameMessage'    => '',
    //                 'emailMessage'       => '',
    //                 'productNameMessage' => '',
    //                 'sizeMessage'        => '',
    //                 'messageMessage'     => '',
    //                 'antispamMessage'    => ''
    //            );

       if($firstName == '') {
           $array['nameMessage'] = 'Empty First Name!';
       }
       if($lastName == '') {
           $array['nameMessage'] = 'Empty Last Name!';
       }
       if(!isEmail($clientEmail)) {
           $array['emailMessage'] = 'Invalid email!';
       }
       if($productName == '') {
           $array['productNameMessage'] = 'Empty product name!';
       }
       if($size == '') {
           $array['sizeMessage'] = 'Empty size!';
       }
       if($antispam != '') {
           $array['antispamMessage'] = 'Bad input!';
       }



?>
