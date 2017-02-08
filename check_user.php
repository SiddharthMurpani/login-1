<?php
session_start();


$user_name = $_POST['email'];
$user_password = $_POST['password'];

$valid_user = "bmackenty";
$valid_password = "1234";

if ($user_name == $valid_user && $user_password == $valid_password){

    $_SESSION['logged_in'] = TRUE;
    header('location: index.php');

} else {

    $_SESSION['login_attempt'] = ($_SESSION['login_attempt'] +1);
    $login_attempt = $_SESSION['login_attempt'];
    echo "failed attempt: $login_attempt";
}

/**
 * Created by PhpStorm.
 * User: BMacKenty
 * Date: 06/02/17
 * Time: 14:16
 */
?>