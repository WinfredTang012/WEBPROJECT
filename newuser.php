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
				<form method="post" action="insert.php">
				<table class="reporttable">
				<tr>
					<td>
					Name:
					</td>
					<td>
					<input type="text" name="name" size="40" value="name">
					</td>
				</tr>
				<tr>
					<td>
					Phone Number:
					</td>
					<td>
					<input type="text" name="phone" size="40" value="phone">
					</td>
				</tr>
				<tr>
					<td>
					Email:
					</td>
					<td>
					<input type="text" name="email" size="40" value="email">
					</td>
				</tr>
				<tr>
					<td>
					Address:
					</td>
					<td>
					<input type="text" name="address" size="40" value="address">
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
						</select>
					</td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Save"></td>
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