<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {
  $name = mysqli_real_escape_string($mysqli, $_POST['Name']);
  $age = mysqli_real_escape_string($mysqli, $_POST['Age']);
  $email = mysqli_real_escape_string($mysqli, $_POST['Email']);
  
  if(empty($name) || empty($age) || empty($email)){
    if(empty($name)){
      echo "<font color='red'>Name field is empty.</font><br/>";
    }
    if(empty($age)){
      echo "<font color='red'>age field is empty.</font><br/>";
    }
    if(empty($email)){
      echo "<font color='red'>email field is empty.</font><br/>";
    }
    echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
  }else{
    $result = mysqli_query($mysqli, "INSERT INTO users(Name,Age,Email) VALUES('$name','$age','$email')");
    echo "<p class='text-success'>Data added successfully</p>";
    echo "<br/><a href='index.php' style='text-align:center'>Show result</a>";
  }
}
?>