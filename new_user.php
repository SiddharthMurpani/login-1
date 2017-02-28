<?php

// create a connection

$connect = mysqli_connect("localhost","bill","pa55word!","bill");

// Check connection

if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    die;
}

$new_user_email = $_POST['new_user_email'];
$new_user_password = $_POST['new_user_password'];

// Perform queries

$result = mysqli_query($connect,"SELECT * FROM user WHERE email LIKE '$new_user_email'");

if(mysqli_num_rows($result) == 0){

    echo "looks like a unique email address";
    $insert_new_user= mysqli_query($connect,"INSERT INTO user (email,password) VALUES ('$new_user_email','$new_user_password')");


} else {

    echo "looks like a duplicate email address";
    die;

}


/**
 * Created by PhpStorm.
 * User: bmackenty
 * Date: 28/02/17
 * Time: 12:46
 */
?>