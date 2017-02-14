<?php

// create a connection

$connect = mysqli_connect("localhost","bill","pa55word!","bill");

// Check connection

if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Perform queries

$result = mysqli_query($connect,"SELECT * FROM USERS");

// print the output

while ($row = mysqli_fetch_array($result)) {
    echo $row[0] . ': ' . $row[1] . ' ' . $row[2];
    echo '<br />';
}

// print number of returned rows

echo "returned: " . mysqli_num_rows($result) . " rows from table.";

echo '<hr />';

$my_new_user = "joe@joe.com";
$my_new_password = "password123";

// $safe_password = password_hash($my_new_password,PASSWORD_DEFAULT);
// $new_user = mysqli_query($connect,"INSERT INTO USERS (email, password) VALUES ('$my_new_user','$safe_password')");

$submitted_password = "password123";
$hashed_password = "$2y$10$tR1bAaofz5zKAug0YZrr.eujolzuLXK7.4RdDFgSEVTdLWNmRpr66.";
if(password_verify($submitted_password,$hashed_password) == TRUE){

    echo"match";

} else {

    echo "no match";
}

// close the connection

mysqli_close($connect);

?>