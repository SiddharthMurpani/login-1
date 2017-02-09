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
    echo $row[0] . ': ' . $row[1] . ' ';
    echo '<br />';
}

// print number of returned rows

echo "returned: " . mysqli_num_rows($result) . " rows from table.";


// close the connection

mysqli_close($connect);





?>