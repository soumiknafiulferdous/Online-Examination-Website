<?php include 'database.php'; ?>
<?php
  if(isset($_POST['submit'])){
	  $question_number=$_POST['question_number'];
	  $question_text=$_POST['question_text'];
	  $correct_choice=$_POST['correct_choice'];
	  //Choices
	  $choices=array();
	  $choices[1]=$_POST['choice1'];
	  $choices[2]=$_POST['choice2'];
	  $choices[3]=$_POST['choice3'];
	  $choices[4]=$_POST['choice4'];
	  
	  $query="INSERT INTO `questions`(question_number,text) VALUES('$question_number','$question_text')";
	  $insert_row=mysqli_query($db1,$query);
	  if($insert_row){
		  foreach($choices as $choice=>$value){
			  if($value!=''){
				  if($correct_choice==$choice){
					  $is_correct=1;
				  }
				  else{
					  $is_correct=0;
				  }
				  $query="INSERT INTO `choices`(question_number,is_correct,text)
				         VALUES('$question_number','$is_correct','$value')";
				  $insert_row=mysqli_query($db1,$query);
				  if($insert_row){
                      continue;
                  }				
                  else{
					  die('Error : ('.$mysqli_error.')');
                  }					  
			  }
		  }
		  $msg='Question has been added';
	  }
  }
  $query="SELECT * from `questions`";
  $result=mysqli_query($db1,$query);
  $total=mysqli_num_rows($result);
  $next=$total+1;
?>
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
	<style>
	  form, .container{
   width: 40%;
   margin:0px auto;
   padding:20px;
}
	</style>
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

    <main role="main" class="container1">
			  <?php
			    if(isset($msg)){
					echo '<p>'.$msg.'</p>';
				}
			  ?>
			  <form method="post" action="add.php">
			    <h2>Add A Question</h1>
			    <p>
				    <label>Question Number</label>
					<input type="number" value="<?php echo $next; ?>" name="question_number" />
				</p>
				<p>
				    <label>Question Text</label>
					<input type="text" name="question_text" />
				</p>
				<p>
				    <label>Option #1: </label>
					<input type="text" name="choice1" />
				</p>
				<p>
				    <label>Option #2: </label>
					<input type="text" name="choice2" />
				</p>
				<p>
				    <label>Option #3: </label>
					<input type="text" name="choice3" />
				</p>
				<p>
				    <label>Option #4: </label>
					<input type="text" name="choice4" />
				</p>
				<p>
				    <label>Correct Choice Number: </label>
					<input type="number" name="correct_choice" />
				</p>
				<p>
					<input type="submit" name="submit" value="Submit"/>
				</p>
    </main><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./onlineexam_files/jquery-3.2.1.slim.min.js.download" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="./onlineexam_files/popper.min.js.download"></script>
    <script src="./onlineexam_files/bootstrap.min.js.download"></script>
  

</body></html>