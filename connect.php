<?php

// create a connection

$connect = mysqli_connect("localhost","bill","pa55word!","bill");

// Check connection

if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// Perform queries

$result = mysqli_query($connect,"SELECT * FROM user");

// print the output

while ($row = mysqli_fetch_array($result)) {
    echo $row[0] . ': ' . $row[1] . ' ' . $row[2];
    echo '<br />';
}

// print number of returned rows

echo "returned: " . mysqli_num_rows($result) . " rows from table.";

echo '<hr />';

?>

<form action="new_user.php" method="post">

    <input type="text" name="new_user_email" placeholder="Type new email here" />
    <br />
    <input type="password" name="new_user_password" placeholder="Type new password here" />
    <br />
    <input type="submit" value="Go! create new user" />

</form>

<?php

// close the connection

mysqli_close($connect);

?>