<?php

include ("dbase.php");

$idURL = $_GET['id'];

$query = "DELETE FROM user WHERE id = '$idURL'";
$result = mysqli_query($conn,$query) or die ("Could not execute query in delete.php");

if($result){
echo "<script type= 'text/javascript'> window.location='user.php'</script>";
}
?>
