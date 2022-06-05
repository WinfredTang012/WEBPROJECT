<?php include('server.php') ?>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
 
<body>

    <form method="post" action="register.php">
  
        <?php include('error.php'); ?>
		<div class="register">
			<table>
				<tr>
					<td>
					Name:
					</td>
					<td>
					<input type="text" name="name" value="<?php echo $name; ?>">
					</td>
				</tr>
				<tr>
					<td>
					Email:
					</td>
					<td>
					<input type="text" name="email" value="<?php echo $email; ?>">
					</td>
				</tr>
				<tr>
					<td>
					Type:
					</td>
					<td>
					<select name="type">
							<option selected="selected">Admin</option>
							<option>GeneralUser</option>
							<option>RestaurantOwner</option>
							<option>Rider</option>
							<?php echo $type; ?>
						</select>
					</td>
				</tr>
				<tr>
					<td>
					Phone Number:
					</td>
					<td>
					<input type="text" name="phone" value="<?php echo $phone; ?>">
					</td>
				</tr>
				<tr>
					<td>
					Address:
					</td>
					<td>
					<input type="text" name="address" value="<?php echo $address; ?>">
					</td>
				</tr>				
				<tr>
					<td>
					Enter Password:
					</td>
					<td>
					    <input type="text" name="password_1">
					</td>
				</tr>
				<tr>
					<td>
					Confirm Password:
					</td>
					<td>
					    <input type="text" name="password_2">
					</td>
				</tr>				
				<tr>
					<td><input type="submit" name="reg_user" value="Register"></td>
				</tr>
				<tr>
					<td>
						Already having an account?
					</td>
					<td>
					   <a href="login.php">Login Here!</a>
					</td>
				</tr>			

				</table>
		</div>
    </form>
</body>
</html>