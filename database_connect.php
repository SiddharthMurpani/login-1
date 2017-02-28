<?php

// create a connection

$connect = mysqli_connect("localhost","bill","pa55word!","bill");

// Check connection

if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>

