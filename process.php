<?php 

//----------Define variables--------//

$name_error = $email_error = $biography_error = "";
$name = $email = $biography = "";

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
  if (empty($_POST["biography"])){
      $biography_error = "Message is required";
  } else{
      $biography = test_input($_POST['biography']);
  }
}



function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
   }
?>
