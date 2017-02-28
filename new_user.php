<?php
session_start();

include('connect.php');

echo "hello";
echo $connect;


$new_user_email = $_POST['new_user_email'];
$new_user_password = $_POST['new_user_password'];

// before we insert this user into the user table of our database, let's ensure there is not a duplicate email


$result = mysqli_query($connect,"SELECT * FROM user");

// print the output

while ($row = mysqli_fetch_array($result)) {
   if($row['email'] == $new_user_email) {

       echo "duplicate email found! ";
   } else {

       echo "unique email, we will add them to our user database.";

   }


}

/**
 * cCreated by PhpStorm.
 * User: bmackenty
 * Date: 27/02/17
 * Time: 09:26
 */
?>