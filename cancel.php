<?php

include("connection.php");
$id = $_GET['id'];
$token = $_GET['token'];

$result = mysqli_query($conn, "UPDATE `employee_leave` SET `status`='Cancelled' WHERE `id`=$id and `token` = $token");

//redirecting to the display page (index.php in our case)
header("Location: empleave.php");
?>

