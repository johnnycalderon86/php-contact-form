<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

//----------Define variables--------//

$name_error = $email_error = $message_error = "";
$name = $email = $message = $success = "";

//--------------form is submitted with post method-------------//

if ($_SERVER["REQUEST_METHOD"] === "POST"){
    if(empty($_POST['fullname'])){
    $name_error ="Name is required";
        
    } else {
        $name = test_input($_POST['fullname']);
    // check if name only contains letters and whitespace
    if(!preg_match("/^[a-zA-Z ]*$/", $name)){
        $name_error = "Only letters and whitspace allowed";
    }
    }
    if (empty($_POST["email"])){
        $email_error = "Email is required";
    } else{
        $email = test_input($_POST["email"]);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $email_error = "Invalid email format";
        }
    }
    if (empty($_POST["message"])){
        $message = "";
    } else{
        $message = test_input($_POST['message']);
    }
    if ($name_error == "" and $email_error == ""){
        $message_body = "";
        unset($_POST['submit']);
        foreach($_POST as $key => $value){
        $message_body .= "$key: $value\n";
        }
      // Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    include("password.php");
    $mail->SMTPDebug = 2;
    $mail->isSMTP();
    $mail->Host       = "smtp.gmail.com";// Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = $useremail;                     // SMTP username
    $mail->Password   = $password;                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    //Recipients
    $mail->setFrom($email, $name);
    $mail->addAddress('johnnycalderondeveloper@gmail.com', 'Joe User');     // Add a recipient
    $mail->addReplyTo($email);
    

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = $message_body;

    $mail->send();
    $success = "Message sent";
    
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
    
    }
    
}




function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
