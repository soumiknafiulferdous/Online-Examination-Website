<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Online Examination</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 400 15px/1.8 Lato, sans-serif;
      color: #777;
  }
  h3, h4 {
      margin: 10px 0 30px 0;
      letter-spacing: 10px;      
      font-size: 20px;
      color: #111;
  }
  .container {
      padding: 80px 120px;
  }
  .person {
      border: 10px solid transparent;
      margin-bottom: 25px;
      width: 80%;
      height: 80%;
      opacity: 0.7;
  }
  .person:hover {
      border-color: #f1f1f1;
  }
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
  }
  .carousel-caption h3 {
      color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
      background: #2d2d30;
      color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
      border-top-right-radius: 0;
      border-top-left-radius: 0;
  }
  .list-group-item:last-child {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
	  
	  
  }
  .thumbnail p {
      margin-top: 15px;
      color: #555;
  }
  .btn {
      padding: 10px 20px;
      background-color: #333;
      color: #f1f1f1;
      border-radius: 0;
      transition: .2s;
  }
  .btn:hover, .btn:focus {
      border: 1px solid #333;
      background-color: #fff;
      color: #000;
  }
  .modal-header, h4, .close {
      background-color: #333;
      color: #fff !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-header, .modal-body {
      padding: 40px 50px;
  }
  .nav-tabs li a {
      color: #777;
  }
  #googleMap {
      width: 100%;
      height: 400px;
      -webkit-filter: grayscale(100%);
      filter: grayscale(100%);
  }  
  .navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color: #2d2d30;
      border: 0;
      font-size: 11px !important;
      letter-spacing: 4px;
      opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
      color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
      color: #fff !important;
  }
  .navbar-nav li.active a {
      color: #fff !important;
      background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }
  .open .dropdown-toggle {
      color: #fff;
      background-color: #555 !important;
  }
  .dropdown-menu li a {
      color: #000 !important;
  }
  .dropdown-menu li a:hover {
      background-color: red !important;
  }
  footer {
      background-color: #2d2d30;
      color: #f5f5f5;
      padding: 32px;
  }
  footer a {
      color: #f5f5f5;
  }
  footer a:hover {
      color: #777;
      text-decoration: none;
  }  
  .form-control {
      border-radius: 0;
  }
  textarea {
      resize: none;
  }
  </style>
</head>
<?php
  if(isset($_GET["submit"])){
	$na=$_GET["name"];
	$em=$_GET["email"];
	$comm=$_GET["comment"];
	$con=mysqli_connect("localhost","root","","registration") or die(mysql_error());
	$query="insert into help(name,email,comment) values('$na','$em','$comm')";
	mysqli_query($con,$query);
	}
?>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">GRE Online Exam</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage">HOME</a></li>
        <li><a href="#band">GRE</a></li>
        <li><a href="#tour">GRE WEBSITE</a></li>
        <li><a href="#contact">CONTACT</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">MORE
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="login.php">Login?</a></li>
            <li><a href="register.php">Register?</a></li>
          </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="quote4.jpg" alt="quote3" width="1200" height="700">
        <div class="carousel-caption">
        </div>      
      </div>

      <div class="item">
        <img src="quote1.jpg" alt="quote1" width="1200" height="700">
        <div class="carousel-caption">
        </div>      
      </div>
    
      <div class="item">
        <img src="quote3.jpg" alt="quote2" width="1200" height="700">
        <div class="carousel-caption">  
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<!-- Container (The Band Section) -->
<div id="band" class="container text-center">
  <h3>GRE EXAM</h3>
  <p><em>Where you can test your skill</em></p>
  <p>We have created a website where you can practice GRE type questions and learn the pattern of GRE and actually find out your score. This website is totally free. Whether you are planning to go to graduate school or business school or just exploring your options you are taking an important step toward your future. It is a smart move to show schools your best and with the GRE General Test, you can!
The GRE General Test helps you do your best on test day. With the GRE General Test, you decide which scores to send to schools. If you feel you didn't do your best on test day, that's okay. You can retake the test and then send only the scores you want schools to see. It's all part of the ScoreSelect option, only available with GRE tests.</p>
  <br>
  <h3>CREATOR OF WEBSITE</h3>
  <div class="row">
    <div class="col-sm-4">
      <p class="text-center"><strong>Farad Ahmed</strong></p><br>
      <a href="#demo" data-toggle="collapse">
        <img src="farzad.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo" class="collapse">
        <p>University: Ahsanullah University of Science And Technology</p>
        <p>Department: CSE</p>

      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Soumik Nafiul Ferdous</strong></p><br>
      <a href="#demo2" data-toggle="collapse">
        <img src="soumik.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo2" class="collapse">
        <p>University: Ahsanullah University of Science And Technology</p>
        <p>Department: CSE</p>

      </div>
    </div>
    <div class="col-sm-4">
      <p class="text-center"><strong>Rumman Ali</strong></p><br>
      <a href="#demo3" data-toggle="collapse">
        <img src="rumman.jpg" class="img-circle person" alt="Random Name" width="255" height="255">
      </a>
      <div id="demo3" class="collapse">
        <p>University: Ahsanullah University of Science And Technology</p>
        <p>Department: CSE</p>

      </div>
    </div>
  </div>
</div>

<!-- Container (TOUR Section) -->
<div id="tour" class="bg-1">
  <div class="container">
    <h3 class="text-center">GRE Websites</h3>
    <p class="text-center">In these Websites you can register for the official GRE exam and also find more information about GRE!<br> Remember to practice hard here in this online exam!</p>
    
    <div class="row text-center">
     
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="gre.png" alt="paris" width="400" height="300">
          <p><strong>GRE Guide.com</strong></p>
          <a href= "http://www.greguide.com/gre-official-site.html">Go to the website</a>
        </div>
      </div>
	   <div class="col-sm-4">
        <div class="thumbnail">
          <img src="ets.png" alt="paris" width="400" height="300">
          <p><strong>ETS GRE</strong></p>
          <a href= "https://www.ets.org/gre">Go to the website</a>
        </div>
      </div>
	   <div class="col-sm-4">
        <div class="thumbnail">
          <img src="career360.jpg" alt="career360" width="400" height="300">
          <p><strong>CAREER 360</strong></p>
          <a href ="https://studyabroad.careers360.com/articles/gre">Go to the website</a>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Tickets</h4>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span> Tickets, $23 per person</label>
              <input type="number" class="form-control" id="psw" placeholder="How many?">
            </div>
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Send To</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email">
            </div>
              <button type="submit" class="btn btn-block">Pay 
                <span class="glyphicon glyphicon-ok"></span>
              </button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>Need <a href="#">help?</a></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container">
  <h3 class="text-center">Contact The Developers</h3>
  <p class="text-center"><em>We love to help you out!</em></p>

  <div class="row">
    <div class="col-md-4">
      <p>Like our website? Drop a note.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Dhaka, Bangladesh</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +880 1685245342</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: boss@gmail.com</p>
    </div>
    <form action="home.php" method="GET" id="usrform">
			<input type="text" name="name" placeholder="Name"/>  <input type="text" name="email" placeholder="Email"/> <br><br>
			<textarea rows="4" cols="50" name="comment" form="usrform"></textarea>
			<input type="submit" value="Submit" name="submit"/>
	</form>
  </div>
  <br>
 <!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>Hope You Liked Our Website</p> 
</footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>



</body>
</html>
