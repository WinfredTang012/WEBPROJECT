<?php

define("DATABASE_HOST", "localhost");
define("DATABASE_USER", "root");
//define("DATABASE_PASSWORD", "password");

// To establish a connection to database and save in $conn
$conn = mysqli_connect(DATABASE_HOST, DATABASE_USER);

// If connection failed then dsplay mysql error
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


// To select one particular database to be used
mysqli_select_db($conn,"userlist") or die( "Could not open products database");


?>