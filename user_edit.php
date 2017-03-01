<?php

// this page can only be called from a trusted page, but we should include protections so only 
// users in a certain group can call it. Also, what would happen (weird) if a user ID was claaed that wasnt in our database?

$user_id = $_GET['id'];
echo "user id is $user_id";


include('database_connect.php');

// Perform queries

$result = mysqli_query($connect,"SELECT * FROM user WHERE id LIKE '$user_id'");

// print the output

while ($row = mysqli_fetch_array($result)) {

 echo '
    <form action="update_user.php" method="post">
    <input type="text" name="email" value="  ' . $row['email'] . ' ">
    </form>
    ';

}


?>
