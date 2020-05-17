<?php
  session_start();
  
  $firstname="";
  $lastname="";
  $email="";
  $password_1="";
  $errors=array();
  //connect to the database;
  $db=mysqli_connect("localhost","root","","registration") or die("Couldn't connect to mysql");
  
  //if the register button is clicked
  if(isset($_POST['register'])){
	 $firstname=mysqli_real_escape_string($db,$_POST['firstname']);
	 $lastname=mysqli_real_escape_string($db,$_POST['lastname']);
     $email=mysqli_real_escape_string($db,$_POST['email']);
     $password_1=mysqli_real_escape_string($db,$_POST['password_1']);	
     $password_2=mysqli_real_escape_string($db,$_POST['password_2']);
     $usercheck=$email;
     $result=mysqli_query($db,"SELECT * FROM users where email='$usercheck'");
	 $rows=mysqli_num_rows($result);
	 if($rows==1){
		 array_push($errors,"Email is already in use"); 
	 }
	 //ensure that form fields are filled properly
	 if(empty($firstname)){
		 array_push($errors,"First Name is required");
	 }
	 if(empty($lastname)){
		 array_push($errors,"Last Name is required");
	 }
	 if(empty($email)){
		 array_push($errors,"Email is required");
	 }
	 if(empty($password_1)){
		 array_push($errors,"Password is required");
	 }
	 if($password_1 != $password_2){
		 array_push($errors,"The two passwords do not match");
	 }
	 // if there are no errors,save user to database
	 if(count($errors)==0){
		 $password=md5($password_1);//encrypt password before storing in database
		 $sql="insert into users(firstname,lastname,email,password) values('$firstname','$lastname','$email','$password_1')";
		 mysqli_query($db,$sql);
	 }
  }
  // log user in from log in page
  if(isset($_POST['login'])){
     $email_1=mysqli_real_escape_string($db,$_POST['email_1']);
     $password=mysqli_real_escape_string($db,$_POST['password']);	 
	 if(empty($email_1)){
		 array_push($errors,"Email is required");
	 }
	 if(empty($password)){
		 array_push($errors,"Password is required");
	 }
	// echo $password;
	 if(count($errors)==0){
		// $password=md5($password);
	     $res=mysqli_query($db,"SELECT * FROM users WHERE email='$email_1' AND password='$password'");
		 $ro=mysqli_num_rows($res);
		 while($row=mysqli_fetch_assoc($res)){
			$_SESSION['lastname']=$row["lastname"];
			$_SESSION['firstname']=$row["firstname"];
		 }
		// echo "$password";
		 if($ro==1){
			 $_SESSION['email_1']=$email_1;
		     $_SESSION['success']="You are now logged in";
		     header('location: index.php');
		 }
		 else{
			array_push($errors,"Wrong email/password combination");
		 }
	  }
  }
  //logout
  if(isset($_GET['logout'])){
	session_destroy();
	unset($_SESSION['email_1']);
	unset($_SESSION['firstname']);
	unset($_SESSION['lastname']);
	header('location: login.php');
  }
?>