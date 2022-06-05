<?php
include ("dbase.php");

extract ($_POST);


$query = "UPDATE user SET name = '$name', phone = '$phone' , address= '$address' , email = '$email', type = '$type' WHERE id = '$id'";

$result = mysqli_query($conn,$query) or die ("Could not execute query in edit.php");
if($result){
 echo "<script type = 'text/javascript'> window.location='user.php' </script>";
}
?>