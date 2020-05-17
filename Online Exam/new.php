<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-default">
		    <ul class="nav navbar-nav">
		      <li><a href="insert.php">Insert</a></li>
		      <li><a href="show.php">Show</a></li>
		      <li><a href="delete.php">Delete</a></li>
		      <li><a href="update.php">Update</a></li>
		    </ul>
		</nav>
		<form action="insert.php" method="GET">
			<input type="text" name="name" placeholder="Name"/><br><br>
			<input type="text" name="phone" placeholder="Phone Number"/><br><br>
			<input type="text" name="address" placeholder="Address"/><br><br>
			<input type="text" name="semester" placeholder="Semester"/><br><br>
			<input type="text" name="year" placeholder="Year"/><br><br>
			<input type="submit" value="Insert" name="submit"/>
		</form>
	</div>
</body>
</html>