<?php
include("dbase.php");

$idURL = $_GET['id'];

$query = "SELECT * FROM user WHERE id = '$idURL'";
$result = mysqli_query($conn,$query) or die ("Could not execute query in edit.php");
$row = mysqli_fetch_assoc($result);

$name = $row['name'];
$phone = $row["phone"];
$email = $row['email'];
$address = $row["address"];
$type = $row["type"];							
								
//@mysql_free_result($result);
?>

<html>
	<head>
		<title>
		</title>
		<link rel="stylesheet" href="style.css">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">		
	</head>
	<body>
		<header>
			<nav>
				<img src="food1.png" alt="food1"><h1>FOODY</h1>
			</nav>
		</header>
		<div class="h1">
				<ul>
					<li><a class="home" href="main.php">Home</a></li>
					<li><a class="user" href="user.php">User List</a></li>
					<li><a class="new" href="newuser.php">New User</a></li>
					<li><a class="report" href="report.php">Report</a></li>
					<li><a class="out" href="login.php">Log Out</a></li>
				</ul>
		</div>
			<article>
				<form method="post" action="update.php">
				<table class="reporttable">
				<tr>
					<td>
					Name:
					</td>
					<td>
						<input type="text" name="name" size="40" value="<?php echo $name; ?>">
					</td>
				</tr>
				<tr>
					<td>
					Phone Number:
					</td>
					<td>
						<input type="text" name="phone" size="40" value="<?php echo $phone; ?>">
					</td>
				</tr>
				<tr>
					<td>
					Email:
					</td>
					<td>
						<input type="text" name="email" size="40" value="<?php echo $email; ?>">
					</td>
				</tr>
				<tr>
					<td>
					Address:
					</td>
					<td>
						<input type="text" name="address" size="40" value="<?php echo $address; ?>">
					</td>
				</tr>
				<tr>
					<td>
					Type:
					</td>
					<td>
						<select name="type" value="<?php echo $name; ?>">
							<option selected="selected">Admin</option>
							<option>GeneralUser</option>
							<option>RestaurantOwner</option>
							<option>Rider</option>
							
						</select>
					</td>
				</tr>
				<input type ="hidden" name="id" value="<?php echo $idURL; ?>">
				<tr>
					<td>
						<input type="submit" value="Save">
					</td>
				</tr>
				</table>
				</form>
			</article>
		</section>
		<footer>
			<p>Copyright @ 2022 All Right Reserved By Foody Sdn Bhd</p>
		</footer>
	</body>
</html>