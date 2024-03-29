<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">
</head>
<body>


    <?php include('process.php')?>
    <div class="row justify-content-center">
    <form action="<?=$_SERVER['PHP_SELF']?>" method ="POST">
        <div class ="form group">
            <label for="your fullname"><strong> Fullname: </strong></strong></label>
            <input type="text" name="fullname" class="form-control" placeholder = "Your Fullname " value="<?=$name?>">
            <span class="error"><?= $name_error?></span>
        </div> 
    <br>  
        <div class ="form group">
        <label for="Email"><strong>Email:</strong></label>
        <input type="text" name="email" class="form-control" placeholder = "Email " value="<?=$email?>">
        <span class="error"><?= $email_error?></span>
    </div> 
    <div class ="form group">  
        <label for="Your message"><strong>Your message</strong> </label>
        <textarea name="message" class="form-control" value="<?=$message?>"></textarea>
        <span class="error"><?= $message_error?></span>
    </div>  
    <br>
    <div class="form group">

<button type='submit' class="btn btn-primary" ><strong>Submit</strong></button>
</div>  
<div class="succsess"><?=$success;?></div>
</div> 
    </form>
</body>
</html>