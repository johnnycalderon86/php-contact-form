<?php 
print_r($_POST);
//----------Define variables--------//

$name_error = $email_error = $biography_error = "";
$name = $email = $biography = "";

//--------------form is submitted with post method-------------//

if ($_SERVER["REQUEST METHOD"] === "POST"){
    if(empty($_POST['name'])){
        $name_error ="Name is required";
        
    } else {
        $name = test_input($_POST['name']);
    }
}

?>
