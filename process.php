<?php echo "<pre>";
print_r($_POST);
//--------Sanitation-------------//
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
echo $email
//---------Validation-----------//

?>
