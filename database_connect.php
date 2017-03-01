<?php

// create a connection

$connect = mysqli_connect("localhost","MY USER NAME","MY PASSWORD","MY DATABASE");

// Check connection

if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>

