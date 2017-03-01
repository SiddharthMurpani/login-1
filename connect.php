<?php

// create a connection

include('database_connect.php');

// Perform queries

$result = mysqli_query($connect,"SELECT * FROM user");

// print the output

while ($row = mysqli_fetch_array($result)) {
    echo $row['id'] . ': ' . $row['email'] . ' ' . $row['password'] . '  - <a href="user_edit.php?id='.$row['id'] .' ">EDIT</a>';
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
