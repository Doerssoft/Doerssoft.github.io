<?php
session_start();

if(!isset($_SESSION['logedin'])){
    header('location:login.php');
}

require_once './CareerController.php';

if(isset($_POST['submit']) && $_POST['submit'] == 'Submit'){
    $login=new CareerController();
    $dd= $login->saveData();
    header('location:career.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div class="container">
       <form action="" method="POST">
           <input type="text" name="job_title">
           <!-- <input type="text" name="opened_on"> -->
           <input type="text" name="qualification">
           <input type="text" name="exp">
           <input type="text" name="req">
           <input type="text" name="duty">
           <input type="text" name="salary">
           <input type="text" name="extra_constrain">
           <input type="checkbox" name="is_open" value="1" id="">
            <br>
           <input type="submit" name="submit" value="Submit">
       </form>
    </div>
</body>
</html>