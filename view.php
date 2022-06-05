<?php
include("dbase.php");

$idURL = $_GET['id'];

$query = "SELECT * FROM user WHERE id = '$idURL'";
$result = mysqli_query($conn,$query) or die ("Could not execute query in edit.php");
$row = mysqli_fetch_assoc($result);
$id = $row['id'];
$name = $row['name'];
$phone = $row["phone"];
$email = $row['email'];
$address = $row["address"];
$type = $row["type"];
$password = $row["password"];							
								
//@mysql_free_result($result);
?>
<html>
	<head>
		<title>
		</title>
		<link rel="stylesheet" href="style.css">
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
		<section>
			<article>
				<table class="reporttable">
				<tr>
					<td>
					ID:
					</td>
					<td>
					<?php echo $id; ?>
					</td>
				</tr>				
				<tr>
					<td>
					Name:
					</td>
					<td>
					<?php echo $name; ?>
					</td>
				</tr>
				<tr>
					<td>
					Phone Number:
					</td>
					<td>
					<?php echo $phone; ?>
					</td>
				</tr>
				<tr>
					<td>
					Email:
					</td>
					<td>
					<?php echo $email; ?>
					</td>
				</tr>
				<tr>
					<td>
					Address:
					</td>
					<td>
					<?php echo $address; ?>
					</td>
				</tr>
				<tr>
					<td>
					Type:
					</td>
					<td>
					<?php echo $type; ?>
					</td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><?php echo $password; ?></td>
				</tr>

				</table>
			</article>
		</section>
		<footer>
			<p>Copyright @ 2022 All Right Reserved By Foody Sdn Bhd</p>
		</footer>
	</body>
</html>