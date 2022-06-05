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
					<li><a onclick="return confirm('Are you sure you want to log out')" class="out" href="login.php">Log Out</a></li>
				</ul>
		</div>
		<section>
			<article>
					<table class="usertable">
					

						<?php
							include("dbase.php");

								$query = "SELECT * FROM user";
								$result = mysqli_query($conn,$query);

							if (mysqli_num_rows($result) > 0){
							// output data of each row
							?>											<tr>
							<td>ID</td>
							<td>Name </td>
							<td>Phone_Num </td>
							<td>Email </td>							
							<td>Type </td>
							<td>Password</td>	
							<td>Action</td>							
						</tr><?php
								while($row = mysqli_fetch_assoc($result)){
									$id = $row["id"];
									$name = $row["name"];
									$phone = $row["phone"];
									$email = $row["email"];
									$address = $row["address"];
									$type = $row["type"];
									$password = $row["password"];
						?>

						<tr>
							<td><?php echo $id; ?></td>
							<td><?php echo $name; ?></td>
							<td><?php echo $phone; ?></td>
							<td><?php echo $email; ?></td>
							<td><?php echo $type; ?></td>
							<td><?php echo $password; ?></td>
							<td><a href="view.php?id=<?php echo $id; ?>"><img src="view1.png" alt="view" style="width:35px;height:25px;"></a>
							<a href="edit.php?id=<?php echo $id; ?>"><img src="edit1.png" alt="edit" style="width:25px;height:25px;"></a>
							<a href="delete.php?id=<?php echo $id; ?>" onclick="return confirm('Are you sure you want to delete this item')"><img src="delete1.png" alt="delete" style="width:25px;height:25px;"></a></td>
						</tr>
						<?php
						}
						} else {
							
							echo "0 results";

						}
						?>
					</table>
			</article>
		</section>
		<footer>
			<p>Copyright @ 2022 All Right Reserved By Foody Sdn Bhd</p>
		</footer>
	</body>
</html>