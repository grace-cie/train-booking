<?php
session_start();
include_once('./UserController.php');

$user = new User();
 
if(isset($_POST['login'])){
	$username = $user->escape_string($_POST['username']);
	$password = $user->escape_string($_POST['password']);
 
	$auth = $user->check_login($username, $password);
 
	if(!$auth){
          // echo "$_SESSION['message']";
    		header('location: ../index.php?error=Invalid credentials');
		exit();
	}
	else{
		$sample = $auth;
		$_SESSION['user_id'] = $auth['id'];
		$_SESSION['user'] = $auth['username'];
		$_SESSION['fname'] = $auth['fname'];
		$_SESSION['lname'] = $auth['lname'];
		$_SESSION['email'] = $auth['email'];
		$_SESSION['usertype'] = $auth['usertype'];
		$_SESSION['acc_balance'] = $auth['acc_balance'];
          // echo "$_SESSION['message']";
		header('location: ../pages.php?sucess=Welcome');
	}
}
else{
	$_SESSION['message'] = 'You need to login first';
     // echo "$_SESSION['message']";
	// header('location:index.php');
}