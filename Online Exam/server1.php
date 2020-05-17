<?php
  session_start();
  
  $username="";
  $password_1="";
  $errors1=array();
  //connect to the database;
  $db=mysqli_connect("localhost","root","","registration") or die("Couldn't connect to mysql");
  
  // log user in from log in page
  if(isset($_POST['login'])){
     $username=mysqli_real_escape_string($db,$_POST['username']);
     $password=mysqli_real_escape_string($db,$_POST['password']);	
	 if(empty($username)){
		 array_push($errors1,"Username is required");
	 }
	 if(empty($password)){
		 array_push($errors1,"Password is required");
	 }
	// echo $password;
	 if(count($errors1)==0){
		// $password=md5($password);
	     $res=mysqli_query($db,"SELECT * FROM admin WHERE username='$username' AND password='$password'");
		 $ro=mysqli_num_rows($res);
		// echo "$password";
		 if($ro==1){
			 $_SESSION['username']=$username;
		     $_SESSION['success']="You are now logged in";
		     header('location: adminpage.php');
		 }
		 else{
			array_push($errors1,"Wrong username/password combination");
		 }
	  }
  }
  //logout
 // if(isset($_GET['logout'])){
	//session_destroy();
///	unset($_SESSION['username']);
//	header('location: login.php');
 // }
?>