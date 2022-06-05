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
		<section>
			<article>
				
					<table class="reporttable">
						<?php
							include("dbase.php");

								$query = "SELECT type, address, COUNT(id) FROM user";
								$result = mysqli_query($conn,$query);
							$sql = "SELECT type, COUNT(id) FROM user GROUP BY type";
							$sql1 = "SELECT address, COUNT(id) FROM user GROUP BY address";
							$result = $conn->query($sql);
							$result1 = $conn->query($sql1);
							
													
						?>

						<tr>
							<td>
							<?php
							echo "<b>"; echo "Total User Based On Type:"; echo "</b>";echo "<br>";echo "<br>";
							while($row = mysqli_fetch_array($result)){
								echo "Total users in ". $row['type']. " = ". $row['COUNT(id)'];
								echo "<br>";
								}
						echo "<br>";echo "<br>";
							echo "<b>";echo "Total User Based On Address:";echo "</b>";echo "<br>";echo "<br>";
							while($row = mysqli_fetch_array($result1)){
								echo "Total users in ". $row['address']. " = ". $row['COUNT(id)'];
								echo "<br>";
								}	
						?>
							</td>
						</tr>
					</table>
			</article>
		</section>
		<footer>
			<p>Copyright @ 2022 All Right Reserved By Foody Sdn Bhd</p>
		</footer>
	</body>
</html>