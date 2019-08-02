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
    }
}

?>
