<?php
//including the database connection file
include("db_connection.php");

//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
$result = mysqli_query($link, "DELETE FROM registration WHERE id=$id");

//redirecting to the display page (index.php in our case)
header("Location:viewuser.php");
?>