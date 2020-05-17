<?php session_start(); ?>
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
	<link rel="stylesheet" type="text/css" href="style1.css">
  </head>

  <body style="background:url(paris.jpg)">

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="question.php?n=1">Take Again <span class="sr-only">(current)</span></a>
          </li>
		  <li class="nav-item active">
            <a class="nav-link" href="index1.php?n=1">Go to Start page<span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container">
		<h2>You're Done!</h2>
        <p>Congrats! You have completed the test<p>
    	<p>Final Score: <?php echo $_SESSION['score']; $_SESSION['score']=0;?></p>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./onlineexam_files/jquery-3.2.1.slim.min.js.download" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="./onlineexam_files/popper.min.js.download"></script>
    <script src="./onlineexam_files/bootstrap.min.js.download"></script>
  

</body></html>