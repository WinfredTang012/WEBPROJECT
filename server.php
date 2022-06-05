<?php
 
// Starting the session, necessary
// for using session variables
session_start();
  
// Declaring and hoisting the variables
$name = "";
$email    = "";
$type = "";
$address= "";
$phone= "";
$errors = array();
$_SESSION['success'] = "";
  
// DBMS connection code -> hostname,
// username, password, database name
$db = mysqli_connect('localhost', 'root', '', 'userlist');
  
// Registration code
if (isset($_POST['reg_user'])) {
  
    // Receiving the values entered and storing
    // in the variables
    // Data sanitization is done to prevent
    // SQL injections
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
	$type = mysqli_real_escape_string($db, $_POST['type']);
	$phone = mysqli_real_escape_string($db, $_POST['phone']);
	$address = mysqli_real_escape_string($db, $_POST['address']);	
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
 
    // Ensuring that the user has not left any input field blank
    // error messages will be displayed for very blank input
    if (empty($name)) { array_push($errors,  "Username is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
	if (empty($type)) { array_push($errors, "Type is required"); }
	if (empty($phone)) { array_push($errors, "Phone is required"); }
	if (empty($address)) { array_push($errors, "Address is required"); }	
    if (empty($password_1)) { array_push($errors, "Password is required"); }
  
    if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");
        // Checking if the passwords match
    }
  
    // If the form is error free, then register the user
    if (count($errors) == 0) {
         
        // Password encryption to increase data security
        $password = $password_1;
         
        // Inserting data into table
        $query = "INSERT INTO user (name, email, type, password, phone, address)
                  VALUES('$name', '$email', '$type', '$password', '$phone', '$address')";
         
        mysqli_query($db, $query);
  

         
        // Page on which the user will be
        // redirected after logging in

				if ($result->num_rows==1 && $_SESSION['type'] =="Admin")
				{
				
				header ("location: login.php");
				}
			
				else if ($result->num_rows==1 && $_SESSION['type'] =="GeneralUser") 
				{
				header ('location: login.php');
				}
				else if ($result->num_rows==1 && $_SESSION['type'] =="RestaurantOwner") 
				{
					header ("location: login.php");
				}
				else 
				
				{
					header ("location: login.php");
				}
		
	}		
    
}
  
// User login
if (isset($_POST['login_user'])) {
     
    // Data sanitization to prevent SQL injection
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
	$type = mysqli_real_escape_string($db, $_POST['type']);
  
    // Error message if the input field is left blank
    if (empty($name)) {
            echo "<script language='javascript'>";
            echo "alert('NAME IS REQUIRED')";
            echo "</script>";
    }
    if (empty($password)) {
           echo "<script language='javascript'>";
            echo "alert('PASSWORD IS REQUIRED')";
            echo "</script>";
    }
    if (empty($type)) {
            echo "<script language='javascript'>";
            echo "alert('TYPE IS REQUIRED')";
            echo "</script>";
    }  
    // Checking for the errors
    if (count($errors) == 0) {
         
        // Password matching
        $password = $password;
         
        $query = "SELECT name,password,type FROM user WHERE name=
                '$name' AND password='$password' AND type='$type'";
        $results = mysqli_query($db, $query);
  
        // $results = 1 means that one user with the
        // entered username exists
        if (mysqli_num_rows($results) == 1) {
             
			if ($_POST['type']=='Admin')
			{
				
				header ('location: main.php');
			}
			else if ($_POST['type'] == 'GeneralUser') 
			{
				header ('location: generaluser.php');
			}
				else if ($_POST['type'] == 'RestaurantOwner') 
				{
					header ('location: restaurantowner.php');
				}
				else 
				{
					header ('location: rider.php');
				}
		
				
			
        }
        else {
            echo "<script language='javascript'>";
            echo "alert('WRONG INFORMATION')";
            echo "</script>";
            
        }
    }
}
  
?>