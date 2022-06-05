<?php

include("dbase.php");


extract( $_POST );

$query = "INSERT INTO user (name,phone,address,email,type) VALUES('$name','$phone','$address','$email','$type')";

if (mysqli_query($conn, $query)) {
      
   echo "<script type='text/javascript'> window.location='user.php' </script>";
	
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
}




?>