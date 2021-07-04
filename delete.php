<?php
include_once("config.php");
$name = $_GET['Name'];
$result = mysqli_query($mysqli, "DELETE FROM users WHERE Name=$name");
header("Location:index.php");
?>