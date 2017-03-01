<?php

// create a connection

include('database_connect.php');

$new_user_email = $_POST['new_user_email'];
$new_user_password = $_POST['new_user_password'];

// Perform queries
// we always sanitize user input. I haven't taught you this yet. 
// Including a variable in SQL query is generlly a bad idea. Prepared statements are much healthier. 

$result = mysqli_query($connect,"SELECT * FROM user WHERE email LIKE '$new_user_email'");

if(mysqli_num_rows($result) == 0){

 // this is also where we would hash and slat the users password. NEVER STORE PLANTEXT PASSWORDS IN A DATABASE!    
    echo "looks like a unique email address";
    $insert_new_user= mysqli_query($connect,"INSERT INTO user (email,password) VALUES ('$new_user_email','$new_user_password')");


} else {

    echo "Error: looks like a duplicate email address";
    die;

}

?>
