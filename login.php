<?php include('server.php') ?>
<html>
<head>
    <title></title>
     
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<form method="post" action="login.php">
  
    <?php include('error.php'); ?>
	<div class="login">
		<table>
				<tr>
					<td>
					Name:
					</td>
					<td>
					<input type="text" name="name" >
					</td>
				</tr>
				<tr>
					<td>
					Password
					</td>
					<td>
					<input type="text" name="password" >
					</td>
				</tr>
				<tr>
					<td>
					Type
					</td>
					<td>
					<select name="type">
							<option selected="selected">Admin</option>
							<option>GeneralUser</option>
							<option>RestaurantOwner</option>
							<option>Rider</option>
						</select>
					</td>
				</tr>				
				<tr>
					<td><br><br><input type="submit" name="login_user" value="Login"></td>
					<td></td>
				</tr>
				<tr>
					<td>New Here?</td>
					<td><a href="register.php">Click here to register!</a></td>
				</tr>
				</table>
		</div>

		</form>				

</body>
 
</html>