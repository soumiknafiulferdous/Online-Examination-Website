<!DOCTYPE html>
<!-- saved from url=(0059)http://getbootstrap.com/docs/4.0/examples/starter-template/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>Online Examination</title>

    <!-- Bootstrap core CSS -->
    <link href="./onlineexam_files/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./onlineexam_files/starter-template.css" rel="stylesheet">
  </head>
  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
           <li class="nav-item active">
            <a class="nav-link" href="adminpage.php">Users <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="add.php">Make Questions <span class="sr-only">(current)</span></a>
          </li>
		  <li class="nav-item active">
            <a class="nav-link" href="Delete.php">Delete Users <span class="sr-only">(current)</span></a>
          </li>
		  <li class="nav-item active">
            <a class="nav-link" href="show.php">Show Questions <span class="sr-only">(current)</span></a>
          </li>
		  <li class="nav-item active">
            <a class="nav-link" href="Help.php">Help <span class="sr-only">(current)</span></a>
          </li>
		  <li class="nav-item active">
            <a class="nav-link" href="admin.php">Log Out <span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
    </nav>

    <main role="main" class="container">
    <table class="table">
		    <thead>
		    	<tr>
		        	<th>ID</th>
		        	<th>Name</th>
		        	<th>Email</th>
		        	<th>Comment</th>
		        </tr>
		    </thead>
		    <tbody>
		    	<?php 
					$con=mysqli_connect("localhost","root","","registration") or die(mysql_error());
					$query="select * from help";
					$result=mysqli_query($con,$query) or die(mysql_error());
					while($row=mysqli_fetch_assoc($result)){
				?>
					<tr>
						<td><?php echo $row["id"]; ?></td>
						<td><?php echo $row["name"]; ?></td>
						<td><?php echo $row["email"]; ?></td>
						<td><?php echo $row["comment"]; ?></td>
					</tr>
				<?php
					}		
				?>
		    </tbody>
  		</table>

    </main><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./onlineexam_files/jquery-3.2.1.slim.min.js.download" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="./onlineexam_files/popper.min.js.download"></script>
    <script src="./onlineexam_files/bootstrap.min.js.download"></script>
  

</body></html>