
<!--Question 1-->
<?php

use JetBrains\PhpStorm\NoReturn;

$username = $_POST['username']??null;
$email = $_POST['email']??null;
$password = $_POST['password']??null;
$re_password = $_POST['re-password']??null;

function validate_input($username, $email, $password, $re_password): bool{
    if(!($username && $email && $password && $re_password)){
        echo "All fields are required";
        return false;
    }elseif($password != $re_password){
        echo "<p> Passwords do not match</p>";
        return false;
    }elseif (strlen($password) < 6){
        echo "<p> Password must be at least 6 characters long </p>";
        return false;
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "<p> Invalid Email</p>";
        return false;
    }
    return true;
}
#[NoReturn]
function reject($entry): void{
    foreach($entry as $value){
        echo "Invalid $value";
    }
    exit();
}
#[NoReturn]
function clean_input($username, $email, $password, $re_password): void{
    $errors = [];
    if(!ctype_alnum($username)){
        $errors[] = $username;
    }
    if(!ctype_alnum($password)){
        $errors[] = $password;
    }
    if(!ctype_alnum($re_password)){
        $errors[] = $re_password;
    }
    reject($errors);
}
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(validate_input($username, $email, $password, $re_password)){
        clean_input($username, $email, $password, $re_password);
    }
}
?>

<!--Question 2-->

<?php
// A
    $page = $_GET['page']??null;
    switch (strtolower($page)){
        case "home": {
            echo "Home Page";
            break;
        }
        case "about": echo "About Page"; break;
        case  "contact": echo "Contact Page"; break;
    }
?>
