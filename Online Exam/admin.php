<?php include('server1.php') ?>
<!DOCTYPE html>
 <html>
    <head>
	  <title>Online Exam</title>
	  <style>
	    .input-group{
		margin: 10px 0px 10px 0px;
	}
	.input-group input{
		height:35px;
		width:100%;
		padding: 10px 10px;
		border: 1px solid gray;
	}
	.btn{
   padding:10px;
   font-size:15px;
   color:white;
   background:#669999;
   align:center;
   position:relative;
   margin-left:250px;
   border:none;
   border-radius:5px;
}
form{
   width: 40%;
   margin:0px auto;
   padding:20px;
}
.create{
	text-align: center;
}

	  
	  </style>
	</head>
    
	<body style="background:url(paris.jpg)">
	  <div class="create">
	    <h1>Admin Login</h1>
	  </div>
	  
	  <form method="post" action="admin.php">
	     <?php include('errors1.php'); ?>
		 <div class="input-group">
			<input type="text" name="username" placeholder="Username">
		 </div>
		 <div class="input-group">
			<input type="password" name="password" placeholder="Password">
		 </div>
		 <div class="input-group">
		    <button type="submit" name="login" class="btn">Login</button>
		 </div>
	</body>
 <html>