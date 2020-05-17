<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php
  $number=(int) $_GET['n'];
  
  $query="SELECT * FROM questions WHERE question_number='$number'";
  
  $res1=mysqli_query($db1,$query);
  
  $question=mysqli_fetch_assoc($res1);
  
  $query="SELECT * FROM choices WHERE question_number='$number'";
  
  $choices=mysqli_query($db1,$query);
  
  $query="SELECT * from `questions`";
  $result=mysqli_query($db1,$query);
  $total=mysqli_num_rows($result);
  
?>
<!DOCTYPE html>
<html>
  <head>
     <meta charset="utf-8" />
	 <title>Online Examination</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.container{
  text-align:center;
  font-size:30px;
}
.choices{
   text-align:center;
   font-size:30px;
}
</style>
   </head>
   
   <body style="background:url(paris.jpg)">
 <p id="demo"></p>

<script>
// Set the date we're counting down to
//var countDownDate = new Date("Feb 12, 2018 22:38:50").getTime();
  var countDownDate = new Date();
  if(!sessionStorage.alreadyClicked){
    countDownDate.setMinutes(countDownDate.getMinutes() + 20);
	sessionStorage.alreadyClicked=1;
  }
// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = hours + "h "
    + minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);
</script>
	     <div class="container">
		    <h1>Online Examination</h1>
		 </div>
	  <main>
	      <div class="container">
		     <div class="current">Question <?php echo "$number"; ?> of <?php echo "$total"; ?></div>
			 <p class="question">
			    <?php echo $question['text']; ?>
				<p>
				<form method="post" action="process.php">
				   <ul class="choices">
				     <?php while($row=mysqli_fetch_assoc($choices)): ?>
					       <li><input name="choice" type="radio" value="<?php echo $row['id'];?>"/><?php echo $row['text']; ?></li>
					 <?php endwhile; ?>
					</ul>
					<input type="submit" value="submit"/>
					<input type="hidden" name="number" value="<?php echo $number; ?>" />
			 </p>
		  </div>
	  </main>
   </body>
</html>